<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="uno.php">
asunto: <input type="text" name="asunto"><br>
mensaje:<textarea name="mensaje" rows="10" cols="30"></textarea><br>
<input type="submit" value="enviar">
    </form>
</body>
</html> -->


<!-- segundo -->
<?php 
// require("header.php");
// require("footer.php")

// tercero base de datos

// include("coneccion.php");
// $consulta="CREATE TABLE datos (ID int NOT NULL AUTO_INCREMENT, Nombre varchar(15), Apellido varchar(15), Edad int, Celular int, Primary key(ID))";

// $resultado=mysqli_query($coneccion,$consulta);

//  quinto

// function dia($uno,$dos,$tres,$cuatro,$cinco){
//     echo $uno;
// }

// dia("lunes","martes","miercoles","jueves","viernes");
?>

<!-- cuarto -->
<!-- <form method="POST" action="uno.php">
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Edad: <input type="text" name="edad"><br>
    Celular: <input type="text" name="celular"><br>
    <input type="submit" name="enviar" value="crear">

</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div>
            <img src="halo.png" alt="halo" class="logo">
        </div>

        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="uno.php">Login</a></li>

        </ul>
    </nav>

    <section class="landing">
<div class="col-md-5" style="top:-20%; left: -20%;">
    <div class="row">
        <h1 class="title">Halo Infinite</h1>
    </div>  
    <div class="row">
        <h4>La nueva historia comienza</h4>
        
    </div> 
         <a class="btn btn-light align-content-center" id="btn">Informacion</a>

</div>
    </section>
    <script src="app.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
</body>
</html>

 