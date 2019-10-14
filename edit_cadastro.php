<?php

//incluindo arquivo de conexao
include './connect.php';
include './form_edit_cadastro.php';
session_start();
$login = $_SESSION['login']; // email do usuario
header("Content-Type: text/html; charset=iso-8859-1", true);
date_default_timezone_set('America/Sao_paulo');

// variaveis de cadastro para o formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$resenha = $_POST['repetesenha'];
$lembrete = $_POST['lembrete'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];


//variavel registro para ver se o usuario esta ou não habilitado a fazer o cadastro
//faz a validação do cadastro verificando se todos os campos estão preenchidos

if ($senha != $resenha) {
    echo "<script type=text/javascript>
            swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Senhas não são iguais!',                       
                    }); 
          </script>";
    $registro = false;
    //  echo"Senhas não conferem";
} else {
    // abilitando o usuario para o cadastro
    $registro = true;


    //fazendo uma consulta para pegar o ultimo id
    $sql = mysqli_query($link, "select * from tb_user where email = '$login'"); // busca o o ultimo id da tabela

    while ($line = mysqli_fetch_array($sql)) {
        $id = $line['id_user'];
        $email_user = $line['email'];
    }

    //Pegando a data e a hora do computador
    $dt = date('Y-m-d');
    $hr = date('H:i:s');

    //cadastrando um novo usuario e direcionando ele para tela principal
    mysqli_query($link, "update tb_user set nome = '$nome', email = '$email', senha = '$senha',"
            . " lembrete = '$lembrete', foto ='$foto', nivel = 1, dt = '$dt', hr = '$hr' where id_user = '$id'");


    $pasta = "postagens/post$id";
    if (file_exists($pasta)) {
        move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . "/" . $foto);
    }

    echo " <script type=text/javascript>
      swal({
      type: 'success',
      title: 'Ok...',
      text: 'Usuario editado com sucesso!',

      });
      </script>";

}
//header('location:logout.php');
?>


