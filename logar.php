<?php

//Arquivo logar 

include "connect.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email != "" && $senha != "") {

    $sql = mysqli_query($link, "select * from tb_user where email='$email'");
    $registro = mysqli_num_rows($sql);

    while ($line = mysqli_fetch_array($sql)) {
        $senha_user = $line['senha'];
        $nivel = $line['nivel'];
    }

    if ($registro) {
        if ($senha_user == $senha) {
            SESSION_START();
            $_SESSION['login'] = $email;
            $_SESSION['password'] = $senha;
            
            if ($nivel == 1) {
                header('location:admin.php');
            }else{
                header('location:cliente.php');
            }
        } else {
            echo "Senha não confere como o que tem no cadastro";
            echo "<a href='login.php'>Voltar a tela de login</a>";
        }
    } else {
        echo 'Voce nao possui cadastro, Deseja se cadastrar';
        echo "<a href='form_cadastro.php'>Cadastre-se</a>";
    }
} else {
    header('location:login.php?valor=1');
    //  echo "É necessario preecher todos os campos e possuir um cadastro";
}
?>

