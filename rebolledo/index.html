<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <!-- Cargamos Font Awesome para usar los iconos de los ojos de forma sencilla -->
    <link rel="stylesheet" href="https://cloudflare.com">
    
    <style>
        /* --- ESTILOS GENERALES Y DE FONDO --- */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .contenedor-fondo {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenedor-fondo::before {
            content: "";
            position: absolute;
            top: -10px; left: -10px; right: -10px; bottom: -10px;
            background-image: url('images/index.jpg'); 
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }

        .contenido {
            position: relative;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); 
        }

        .contenedor-botones {
            display: flex;
            gap: 25px;            
            justify-content: center;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .btn-registro, .btn-login {
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            display: inline-block;
        }

        .btn-registro:hover, .btn-login:hover { transform: scale(1.05); }
        .btn-registro:active, .btn-login:active { transform: scale(0.98); }

        .btn-registro { background-color: #1DB9E0; }
        .btn-registro:hover { background-color: #159ec0; }

        .btn-login { background-color: #D4AFED; }
        .btn-login:hover { background-color: #b992d3; }

        /* --- ESTILOS DE LAS VENTANAS MODALES --- */
        .modal {
            display: none; 
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .contenido-modal {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            font-family: Arial, sans-serif;
            color: #333;
        }

        .cerrar-btn {
            position: absolute;
            top: 15px; right: 20px;
            font-size: 28px;
            cursor: pointer;
            color: #aaa;
            line-height: 1;
        }
        .cerrar-btn:hover { color: #000; }

        .contenido-modal h2 { margin-top: 0; margin-bottom: 20px; text-align: center; }

        .grupo-input { margin-bottom: 20px; text-align: left; }
        .grupo-input label { display: block; margin-bottom: 5px; font-weight: bold; }
        
        /* 👁️ Contenedor relativo para poder posicionar el ojo encima del input */
        .contenedor-password {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .grupo-input input {
            width: 100%;
            padding: 10px;
            padding-right: 40px; /* Espacio extra a la derecha para que el texto no tape el ojo */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* Estilo para ubicar el icono del ojo dentro del input */
        .icono-ojo {
            position: absolute;
            right: 15px;
            cursor: pointer;
            color: #777;
            transition: color 0.2s;
        }
        .icono-ojo:hover { color: #333; }

        .btn-enviar {
            background-color: #1DB9E0;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn-enviar-login { background-color: #D4AFED; }
        .btn-enviar-login:hover { background-color: #b992d3; }
        .btn-enviar:hover { transform: scale(1.02); }
        .btn-enviar:active { transform: scale(0.98); }
    </style>
</head>
<body>

    <div class="contenedor-fondo">
        <div class="contenido">
            <h1>Bienvenido.</h1>
            <div class="contenedor-botones">
                <a href="#" class="btn-registro" id="abrir-registro">Registrarse</a>
                <a href="#" class="btn-login" id="abrir-login">Iniciar sesión</a>
            </div>
        </div>
    </div>

    <!-- 1️⃣ MODAL DE REGISTRO -->
    <div id="modal-registro" class="modal">
        <div class="contenido-modal">
            <span class="cerrar-btn" id="cerrar-registro">&times;</span>
            <h2>Crear Cuenta</h2>
            <form action="registro.php" method="POST">
                <div class="grupo-input">
                    <label for="reg-nombre">Nombre:</label>
                    <input type="text" id="reg-nombre" name="nombre" required placeholder="Tu nombre">
                </div>
                <div class="grupo-input">
                    <label for="reg-password">Contraseña:</label>
                    <div class="contenedor-password">
                        <input type="password" id="reg-password" name="password" required placeholder="Tu contraseña">
                        <!-- Icono del ojo con evento onclick -->
                        <i class="fa-solid fa-eye icono-ojo" onclick="alternarPassword('reg-password', this)"></i>
                    </div>
                </div>
                <button type="submit" class="btn-enviar">Registrar</button>
            </form>
        </div>
    </div>

    <!-- 2️⃣ MODAL DE INICIAR SESIÓN -->
    <div id="modal-login" class="modal">
        <div class="contenido-modal">
            <span class="cerrar-btn" id="cerrar-login">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form action="login.php" method="POST">
                <div class="grupo-input">
                    <label for="log-nombre">Nombre:</label>
                    <input type="text" id="log-nombre" name="nombre" required placeholder="Tu nombre">
                </div>
                <div class="grupo-input">
                    <label for="log-password">Contraseña:</label>
                    <div class="contenedor-password">
                        <input type="password" id="log-password" name="password" required placeholder="Tu contraseña">
                        <!-- Icono del ojo con evento onclick -->
                        <i class="fa-solid fa-eye icono-ojo" onclick="alternarPassword('log-password', this)"></i>
                    </div>
                </div>
                <button type="submit" class="btn-enviar btn-enviar-login">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- SCRIPT CONTROLADOR -->
    <script>
        // Elementos de los Modales
        const modalRegistro = document.getElementById('modal-registro');
        const btnAbrirReg = document.getElementById('abrir-registro');
        const btnCerrarReg = document.getElementById('cerrar-registro');

        const modalLogin = document.getElementById('modal-login');
        const btnAbrirLog = document.getElementById('abrir-login');
        const btnCerrarLog = document.getElementById('cerrar-login');

        // Abrir / Cerrar Registro
        btnAbrirReg.addEventListener('click', (e) => { e.preventDefault(); modalRegistro.style.display = 'flex'; });
        btnCerrarReg.addEventListener('click', () => { modalRegistro.style.display = 'none'; });

        // Abrir / Cerrar Login
        btnAbrirLog.addEventListener('click', (e) => { e.preventDefault(); modalLogin.style.display = 'flex'; });
        btnCerrarLog.addEventListener('click', () => { modalLogin.style.display = 'none'; });

        // Cerrar al hacer clic afuera
        window.addEventListener('click', (e) => {
            if (e.target === modalRegistro) modalRegistro.style.display = 'none';
            if (e.target === modalLogin) modalLogin.style.display = 'none';
        });

        // 👁️ FUNCIÓN NUEVA: Muestra u oculta la contraseña de forma dinámica
        function alternarPassword(idInput, icono) {
            const inputPassword = document.getElementById(idInput);
            
            if (inputPassword.type === "password") {
                inputPassword.type = "text";
                // Cambia el icono al ojo tachado
                icono.classList.remove("fa-eye");
                icono.classList.add("fa-eye-slash");
            } else {
                inputPassword.type = "password";
                // Regresa al icono del ojo abierto
                icono.classList.remove("fa-eye-slash");
                icono.classList.add("fa-eye");
            }
        }
    </script>

</body>
</html>
