

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - Nutrition</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
    <script src="/assets/js/main.js" type="module"></script>
</head>
<body>
    <header id="header">
        <div class="container__header">
            <div class="logo">
                <h2>NUTRITION</h2>
            </div>

  <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="index.html "class="select">Inicio</a></li>
                    </ul>
                </nav>

                
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>
        </div>
    </header>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_ususario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Registro-->
                    <form action="php/registro_ususario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" id="register-nombre" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" id="register-correo" placeholder="Correo Electronico" name="correo">
                        <input type="text" id="register-usuario" placeholder="Usuario" name="usuario">
                        <input type="password" id="register-contraseña" placeholder="Contraseña" name="contrasena">
                        <button type="submit">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script2.js"></script>
        <script src="assets/js/script3.js"></script>
</body>
</html>