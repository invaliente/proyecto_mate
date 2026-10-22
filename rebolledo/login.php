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


// 2. Verificar el envío de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
    $password_ingresado = trim($_POST['password']);

    // 3. Buscar al usuario en la tabla
    $consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows == 1) {
        // Guardamos los datos del usuario en un array
        $usuario = $resultado->fetch_assoc();
        
        // 4. Verificar si la contraseña coincide con el hash encriptado de la BD
        if (password_verify($password_ingresado, $usuario['password'])) {
            
            // Guardar variables de sesión para usarlas en páginas protegidas
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            
            // 🛠️ CORRECCIÓN: Se cambió index.html por menu.html para redirigir al menú de 2x2
            echo "<script>
                    alert('¡Bienvenido de nuevo, " . $usuario['nombre'] . "!');
                    window.location.href='menu.html'; 
                  </script>";
        } else {
            // Contraseña incorrecta
            echo "<script>
                    alert('Contraseña incorrecta. Inténtalo de nuevo.');
                    window.location.href='index.html';
                  </script>";
        }
    } else {
        // El usuario no existe
        echo "<script>
                alert('El usuario no existe.');
                window.location.href='index.html';
              </script>";
    }
}

$conexion->close();
?>
