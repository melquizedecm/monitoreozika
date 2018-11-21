<?php 
require_once("../lib/links.php");
libnivel2();

//////////1. RECEPCION DE DATOS /////////////
$myusername=$_POST['user']; 
$mypassword=$_POST['password'];
$myusername =stripslashes($myusername); 
$mypassword =stripslashes($mypassword);

//////////2. CONSULTA EN LA BASE DE DATOS /////////////
$sql="SELECT * FROM usuarios WHERE name_user='".$myusername."' and password_user='".$mypassword."'";
$fila=getFilaSql2($sql);
//var_dump($sql);


//////////3. COMPROBAR VALIDACIONES Y HACER LOG IN /////////////
if($fila){ 
$_SESSION['session_username']=$fila['name_user'];
//$_SESSION['session_nombre']=$fila['password_user'];
//$_SESSION['session_roles']=$fila['roles'];
//$_SESSION['session_correo']=$fila['correo'];
//$_SESSION['session_nombre']=$fila['nombre'];
//$_SESSION['session_tipo']=$fila['tipo'];  
//regMovimiento($link,"INICIO SESION COMO ".$fila['usuario']);
    $_SESSION['session_username'];
    
    header('location: ../view/dashboard.php');
}else{
    //echo "Error";
    header("location: ../view/login.php?error=1");  
} 
?> 

<a href="../view/logout.php">Salir</a>