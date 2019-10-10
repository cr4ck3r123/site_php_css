<?php
include "connect.php";
session_start();
$login = $_SESSION['login']; // email do usuario
$senha_log = $_SESSION['password']; //password do usuario
$sql = mysqli_query($link, "select * from tb_user where email = '$login'");

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

        <title> Site em php</title>
        <!-- lib scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    </head>
    <body>
        <div id="form_cadastro">
            <br>
            <h1 class="titulos" style="margin-left: 10%"> Formulario de scripts css  
            </h1> 
            <form action="postar_script.php" method="POST" enctype="multipart/form-data"> 
                <input type="text" name="titulo" class="campos" placeholder="Digite o titulo da postagem">
                <input type="file" name="foto" class="campos" placeholder="Senha">
                <textarea name="conteudo" class="campos" placeholder="Digite aqui o conteudo..." style="height:150px" maxlength="500"></textarea>
                <div id="botoes">
                    <input type="submit" value="Publicar" id="btnClick" class="bt_cad">
                    <input type="reset" value="Limpar" class="bt_cad">
                </div>   
            </form>
            <div class="botoes">
                <a href="admin.php" class="form_link">&Larr; Voltar para o painel</a>
                <a href="form_postar.php" class="form_link">&nbsp;&nbsp; |  &nbsp;&nbsp;Ir para form postar 	&Rarr;</a>
            </div> 
            <div class="mostrar"></div>
        </div> 
    </body>
</html>
