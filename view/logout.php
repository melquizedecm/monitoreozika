<?php

//regMovimiento($link,"FINALIZA	 SESION");
if (!isset($_SESSION))
  {
    session_start();
  }else{
  session_destroy();
  }
print_r("terminada");
  header("location: login.php");


?>
