<?php

include "connect.php";

date_default_timezone_set('America/Sao_paulo'); //seto eu formato a hora para ficar de acordo
session_start(); //inicializo a sessão
$login = $_SESSION['login']; // email do usuario
$senha_log = $_SESSION['password']; //password do usuario
$sql =  mysqli_query($link, "select * from tb_user where email = '$login'"); // query com o email do suaurio

while ($line = mysqli_fetch_array($sql)) {
    $senha = $line['senha'];
    $nivel = $line['nivel'];
    $id = $line['id_user'];
}



if ($senha_log == $senha && $nivel == 1) {

    $titulo = $_POST['titulo'];
    $foto = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $conteudo = $_POST['conteudo'];
    include './substituicao.php';
    $registro = false;

    if ($titulo != "" && $foto != "" && $conteudo != "") {
        $registro = true;
    } else {
        echo "<script>window.history.go(-1);</script>";
    }

    $sql = mysqli_query($link, "select * from tb_postagem order by id_postagem desc limit 1");
    while (@$line = mysqli_fetch_array($sql)) {
        $idpost = $line['id_postagem'];
        echo $idpost;
    }
    //  echo "Id: $idpost";
    $pasta = "postagens/post$idpost";
    echo $pasta;

    if (file_exists($pasta)) {
        echo "Pasta já existe";
    } else {
        mkdir($pasta, 0777);
        echo "pasta criada";
    }

    $dt = date('Y-m-d');
    $hr = date('H:i:s');
    $page = 2;

    if ($registro == true) {
        mysqli_query($link, "insert into tb_postagem(titulo, imagem, texto, dt, hr, page, id_user) values "
                . "('$titulo', '$foto', '$conteudo', '$dt', '$hr', '$page', '$id')");

        move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . "/" . $foto);
        header('location:form_scriptcss.php');
    } else {
        echo "<br>";

        echo "Nao foi possivel cadastrar esse conteudo";
        echo "<a href=form_scriptcss.php>Voltar ao formulario</a>";
    }
} else {

    header('location:admin.php');
}


?>