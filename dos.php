<?php 

$user="test";
$pass="test";
$userE=$_POST['user'];
$passE=$_POST['pass'];
if($user==$userE && $pass==$passE){
    header("location: tres.php");
    session_start();
    $_SESSION["nombre"] = $userE;
    $_SESSION["pass"] = $passE;
    echo "te logiaste bien";
        
}
else{
    header("location: index.php");
}

// $solicitud=fopen("texto.txt", "r") or die("no se pudo leer");
// while(!feof($solicitud)){
//     $leer=fgets($solicitud);
//     $ver=nl2br($leer);
//     echo $ver;
// }
// 
// segundo

//quinto

// include("coneccion.php");
// $solicitud="select * from datos";
// $resultado=mysqli_query($coneccion, $solicitud);


// echo"<table>
//     <tr><td>Nombre</td><td>Apellido</td><td>edad</td><td>celular</td><td>accion</td></tr>";


// while($fila= mysqli_fetch_array($resultado)){
//     echo "<tr><td>".$fila['Nombre']."</td><td>".$fila['Apellido']."</td><td>".$fila['Edad']."</td><td>".$fila['Celular']."</td><td><a href='tres.php?id=".$fila['ID']."'>eliminar</a></td></tr>";
// }
// echo "</table>";
?>