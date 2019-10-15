<?php

//Arquivo logar 

include "connect.php";
include './login.php';

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
                               
            } else {
                header('location:cliente.php');
            }
        } else {
                              
            echo "<script type=text/javascript> 
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'E-mail ou Senha incorretos!',                       
                    }); 
                    </script>";
            // echo "<a href='login.php'>Voltar a tela de login</a>";
        }
    } else {
        echo "<script type=text/javascript> 
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Voce nao possui cadastro, Deseja se cadastrar!',
                        footer: '<a href=form_cadastro.php>Cadastre-se</a>'
                    });
              </script>";
    }
} else {
    header('location:login.php?valor=1');
    //  echo "É necessario preecher todos os campos e possuir um cadastro";
}
?>

