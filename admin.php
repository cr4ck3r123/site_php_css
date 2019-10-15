<?php
include "connect.php";
session_start();
@$login = $_SESSION['login']; // email do usuario
@$senha_log = $_SESSION['password']; //password do usuario
$sql = mysqli_query($link, "select * from tb_user where email = '$login'");

if ($login == null) {
    header('location:index.php');
}

while ($line = mysqli_fetch_array($sql)) {
    $senha = $line['senha'];
    $nivel = $line['nivel'];
    $foto = $line['foto'];
    $id = $line['id_user'];
}

if ($senha_log == $senha && $nivel == 1) {
    
} else {
    header('location:index.php');
}
?>
<html>
    <head>	

        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	
        
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        
        <title> Painel Administrador </title>

    </head>
    <body>


        <div id="form_cadastro">

            <h1 class="titulos" style="margin-left: 20%">Usuario logado como: <?php echo $login; ?></h1>
            <a href="form_edit_cadastro.php" style="margin-left: 10%">Editar Cadastro</a> |
            <a href="form_postar.php">Criar uma postagem</a> | <a href="form_scriptcss.php">Criar Scripts Css</a> |
            <a href="index.php">Ir para Home</a> | <a href="logout.php" name="btnSair">Sair</a>

            <img src="<?php echo "user/user$id/$foto"; ?>"  style="float:left; width:60px; height:auto; margin: -20px -5px 0 0">

        </div>


    </body>

</html>
