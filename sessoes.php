<?php

session_start(); // Iniciando a minha sessão

/*isset() // é setado - verifica se a variavel existe
 * unset() // dessetado - destruir a váriavel de sessão. realizar o logout
 */

$login = "pcanal";

$senha = "123";

if($login == "pcanal" and $senha == "123"){
    $_SESSION['logado'] = true;
    echo "Logado";
     header("location:restrito.php");
}  else {
    echo "Não logado";
   
}



?>
