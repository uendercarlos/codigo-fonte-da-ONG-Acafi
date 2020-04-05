<?php

session_start();

if (isset($_COOKIE["usuario"]) && isset($_COOKIE["senha"])) {

    setcookie('usuario', $usuario, time() - 1);
    setcookie('senha', $senha, time() - 1);

    $_SESSION["finalizada"] = "Sim";

    header("Location: login.php");
} else {
    $_SESSION["finalizada"] = "Sim";
	
    header("Location: login.php");
}
?>