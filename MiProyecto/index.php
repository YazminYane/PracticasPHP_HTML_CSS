<?php session_start(); # Indica que la sesion empezará


if(isset($_SESSION['usuario'])){
    header('Location: ');
}else {
    header('Location: 1.login.php');
}


header('Location: views/1.view.login.html');

?>