<?php

session_start();

$usuario = "admin";
$senha = "123";

if ($_POST['usuario'] == $usuario && $_POST['senha'] == $senha){
    if (isset($_POST['check'])){
        setcookie('usuario', $usuario, time() + 1800);//dura 30 minutos
        setcookie('senha', $senha, time() + 1800);// dura 30 minutos

        header("Location: lista_clientes.php");
    }else{      
        setcookie('cookie', $usuario, time() + 3);
        
        header("Location: lista_clientes.php");
    }

}else{
    $_SESSION['invalido'] = "Sim";
    
    header("Location: login.php");
}
?>