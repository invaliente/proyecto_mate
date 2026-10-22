<?php
// 1. Configuración de conexión para INFINITYFREE (INTERNET)
$host = "://infinityfree.com"; 
$user = "if0_43184975";            
$pass = "WcpNk8j3xr8FFz";          
$db   = "if0_43184975_proyecto"; // 👈 Recuerda presionar el botón morado abajo antes para que exista

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


// 2. Verificar que se enviaron los datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar campos de texto para seguridad básica
    $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
    $password_plana = trim($_POST['password']);
    
    // Encriptar la contraseña (Muy importante para la seguridad)
    $password_encriptada = password_hash($password_plana, PASSWORD_BCRYPT);

    // 3. Comprobar si el nombre de usuario ya existe
    $buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    $resultado = $conexion->query($buscarUsuario);

    if ($resultado->num_rows > 0) {
        echo "<script>
                alert('El nombre de usuario ya está registrado. Intenta con otro.');
                window.location.href='index.html'; 
              </script>";
    } else {
        // 4. Insertar nuevo usuario
        $insertar = "INSERT INTO usuarios (nombre, password) VALUES ('$nombre', '$password_encriptada')";
        
        if ($conexion->query($insertar) === TRUE) {
            echo "<script>
                    alert('¡Usuario registrado exitosamente!');
                    window.location.href='index.html'; 
                  </script>";
        } else {
            echo "Error al registrar: " . $conexion->error;
        }
    }
}

$conexion->close();
?>
