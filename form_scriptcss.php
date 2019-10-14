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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


         <script type="text/javascript">
            function validar() {
                var titulo = formScripts.titulo.value;
                var conteudo = formScripts.conteudo.value;
               
                //  alert(email);
                if (titulo == "" || conteudo == "") {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Preecha todos os campos!',                       
                    });
                    //   formlogin.nome.focus();
                    return false;
                    
                }
            }
            </script>
    </head>
    <body>
        <div id="form_cadastro">
            <br>
            <h1 class="titulos" style="margin-left: 10%"> Formulario de scripts css  
            </h1> 
            <form name="formScripts" action="postar_scripts.php" method="POST" enctype="multipart/form-data"> 
                <input type="text" name="titulo" class="campos" placeholder="Digite o titulo da postagem">
                <input type="file" name="foto" class="campos" placeholder="Senha">
                <textarea name="conteudo" class="campos" placeholder="Digite aqui o conteudo..." style="height:150px" maxlength="500"></textarea>
                <div id="botoes">
                    <input type="submit" value="Publicar" onclick="return validar()" id="btnClick" class="bt_cad">
                    <input type="reset" value="Limpar" class="bt_cad">
                </div>   
            </form>
            <div class="botoes">
                <a href="admin.php"  class="form_link">&Larr; Voltar para o painel</a>
                <a href="form_postar.php" class="form_link">&nbsp;&nbsp; |  &nbsp;&nbsp;Ir para form postar 	&Rarr;</a>
            </div> 
            <div class="mostrar"></div>
        </div> 
    </body>
</html>
