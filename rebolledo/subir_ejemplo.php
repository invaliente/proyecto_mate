<?php
session_start();

// Seguridad: Si el usuario no está logueado, no lo dejamos subir nada
if (!isset($_SESSION['usuario_nombre'])) {
    echo "<script>
            alert('Por favor, inicia sesión para subir ejemplos.');
            window.location.href='index.html';
          </script>";
    exit();
}

// 1. Configuración de conexión a la BD 'proyecto'
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "proyecto"; 

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// 2. Procesar la subida cuando se reciba por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['imagen_ejemplo'])) {
    
    $tema = intval($_POST['tema']); // Recupera si es tema 1, 2 o 3
    $usuario = $_SESSION['usuario_nombre']; // Quién lo subió
    
    // Configuración de la carpeta de destino
    $directorio_destino = "uploads/";
    
    // Si la carpeta 'uploads' no existe en tu proyecto, el script la creará automáticamente
    if (!file_exists($directorio_destino)) {
        mkdir($directorio_destino, 0777, true);
    }

    $archivo_nombre = $_FILES['imagen_ejemplo']['name'];
    $archivo_tipo = $_FILES['imagen_ejemplo']['type'];
    $archivo_temporal = $_FILES['imagen_ejemplo']['tmp_name'];
    $archivo_error = $_FILES['imagen_ejemplo']['error'];

    // Validar extensiones permitidas
    $extension = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    $extensiones_permitidas = array("jpg", "jpeg", "png", "gif");

    if (in_array(strtolower($extension), $extensiones_permitidas)) {
        if ($archivo_error === 0) {
            
            // Generar un nombre único para la imagen para que no se sobrescriban archivos con el mismo nombre
            $nuevo_nombre_archivo = "tema" . $tema . "_" . uniqid() . "." . $extension;
            $ruta_completa_destino = $directorio_destino . $nuevo_nombre_archivo;

            // Mover el archivo de la memoria temporal a la carpeta física 'uploads/'
            if (move_uploaded_file($archivo_temporal, $ruta_completa_destino)) {
                
                // 3. Insertar el registro en la base de datos
                $query = "INSERT INTO ejemplos (usuario_nombre, tema, ruta_imagen) VALUES ('$usuario', '$tema', '$ruta_completa_destino')";
                
                if ($conexion->query($query) === TRUE) {
                    echo "<script>
                            alert('¡Ejemplo publicado con éxito!');
                            window.location.href='tema" . $tema . ".html';
                          </script>";
                } else {
                    echo "Error al guardar en la base de datos: " . $conexion->error;
                }
            } else {
                echo "Error al mover el archivo al directorio destino.";
            }
        } else {
            echo "Ocurrió un error al subir el archivo.";
        }
    } else {
        echo "<script>
                alert('Formato de archivo no válido. Solo se permiten imágenes JPG, JPEG, PNG o GIF.');
                window.location.href='tema" . $tema . ".html';
              </script>";
    }
}

$conexion->close();
?>
