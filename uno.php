<?php 

// $asunto=$_POST['asunto'];
// $mensaje=$_POST['mensaje'];
// $solicitud=fopen("texto.txt","a") or die("no se pudo abrir para escribir");

// fwrite($solicitud, "ASUNTO");
// fwrite($solicitud, "\n");
// fwrite($solicitud, $asunto);
// fwrite($solicitud, "\n");
// fwrite($solicitud, "Mensaje");
// fwrite($solicitud, "\n");
// fwrite($solicitud, $mensaje);
// echo "la operacion se hizo <a href='dos.php'> ver el archivo</a>";
// fclose($solicitud);


// segundo

//cuarto
// include("coneccion.php");

// $nombre=$_POST['nombre'];
// $apellido=$_POST['apellido'];
// $edad=$_POST['edad'];
// $celular=$_POST['celular'];


// $solicitud="INSERT INTO datos (Nombre, Apellido, Edad, Celular) values ('$nombre','$apellido','$edad','$celular')";

// $resultado=mysqli_query($coneccion, $solicitud);
// header("location: index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>

   </div>
    <form method="POST" id="Login" action="dos.php">

        <div class="form-group">


            <input type="text" class="form-control" name="user" placeholder="Usuario">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="pass" placeholder="Contraseña">

        </div>
        <div class="forgot">

</div>
        <button type="submit" class="btn btn-primary">Iniciar</button>

    </form>
    </div>

</div></div></div>


</body>
</html>

