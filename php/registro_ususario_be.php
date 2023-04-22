<?php 

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Encriptar contraseña
    $contrasena = hash('sha512',$contrasena);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion," SELECT * FROM usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verificar_correo) >0){
        echo '
        <script>
            alert("Este correo ya esta registrado , intenta con otro diferente");
            window.location = "../login.php";
        </script>';
        exit();
    }
    $ejecutar = mysqli_query($conexion,$query);    
    
    if($ejecutar){
        echo '
        <script>
            alert("usuario creado exitosamente");
            window.location = "../login.php";
        </script>';
    }else{
        echo '
        <script>
            alert("intentalo de nuevo , ususario no registrado");
            window.location = "../login.php";
        </script>';
    }

    mysqli_close($conexion);


?>