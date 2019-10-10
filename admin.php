  <?php 
  include "connect.php";
  session_start();
  $login = $_SESSION['login']; // email do usuario
  $senha_log = $_SESSION['password']; //password do usuario
  $sql = mysqli_query($link, "select * from tb_user where email = '$login'");

  while($line = mysqli_fetch_array($sql)){
      $senha = $line['senha'];
      $nivel = $line['nivel'];
      $foto = $line['foto'];
      $id = $line['id_user'];
  }
  

  if($senha_log == $senha && $nivel == 1){
      
      
  }else{
      header('location:index.php');
  }
  ?>
<html>
    <head>	
      
        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <title> Painel Administrador </title>

        <script type="text/javascript">
        
            function deslogar(){
                    
            $("#btnSair").on('click', function () {
                swal("Hello OWT");
            });
        });      
        
        </script>
        
        
    </head>
    <body>


        <div id="form_cadastro">

            <h1 class="titulos" style="margin-left: 20%">Usuario logado como: <?php echo $login; ?></h1>
            <a href="form_postar.php" style="margin-left: 10%">Criar uma postagem</a> | <a href="form_scriptcss.php">Criar Scripts Css</a> |
            <a href="index.php">Ir para Home</a> | <a href="logout.php" name="btnSair">Sair</a>
            
            <img src="<?php echo "user/user$id/$foto";?>"  style="float:left; width:60px; height:auto; margin: -20px -5px 0 0">

        </div>





    </body>

</html>
