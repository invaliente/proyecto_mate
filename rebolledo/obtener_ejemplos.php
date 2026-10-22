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


// 2. Comprobar si se solicitó un tema específico
if (isset($_GET['tema'])) {
    $tema = intval($_GET['tema']);

    // Buscar imágenes del tema ordenadas de la más nueva a la más vieja
    $consulta = "SELECT usuario_nombre, ruta_imagen FROM ejemplos WHERE tema = $tema ORDER BY id DESC";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        // Armar el bloque visual para cada imagen encontrada
        while ($fila = $resultado->fetch_assoc()) {
            echo "<div class='tarjeta-ejemplo-subido'>";
            echo "  <p class='usuario-autor'>@ " . htmlspecialchars($fila['usuario_nombre']) . "</p>";
            echo "  <img src='" . htmlspecialchars($fila['ruta_imagen']) . "' alt='Ejemplo matemático' class='img-ejemplo-galeria' onclick='window.open(this.src)'>";
            echo "</div>";
        }
    } else {
        echo "<p style='text-align: center; color: rgba(255,255,255,0.6); padding: 20px;'>Aún no hay ejemplos subidos para este tema. ¡Sé el primero!</p>";
    }
}

$conexion->close();
?>
