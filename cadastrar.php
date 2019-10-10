<?php

//incluindo arquivo de conexao
include './connect.php';
date_default_timezone_set('America/Sao_paulo');



// variaveis de cadastro para o formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$resenha = $_POST['repetesenha'];
$lembrete = $_POST['lembrete'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];

/*
  echo $nome . "<br>";
  echo $email . "<br>";
  echo $senha . "<br>";
  echo $resenha . "<br>";
  echo $lembrete . "<br>";
  echo $foto . "<br>";
  echo $tipo . "<br>";
 */

//variavel registro para ver se o usuario esta ou não habilitado a fazer o cadastro
$registro = false;

//faz a validação do cadastro verificando se todos os campos estão preenchidos

     if ($senha != $resenha) {
        echo "<script>alert('Senhas não conferem!');window.history.go(-1);</script>";
      //  echo"Senhas não conferem";
    } else {
        // abilitando o usuario para o cadastro
         $registro = true;
    }
  
  //fazendo uma consulta para pegar o ultimo id
   $sql = mysqli_query($link, "select * from tb_user order by id_user desc limit 1"); // busca o o ultimo id da tabela
    while ($line = mysqli_fetch_array($sql)) {
        $id = $line['id_user'];
        $email_user = $line['email'];
    }
 
    $sqlEmail = mysqli_query($link, "select email from tb_user");
    while ($line = mysqli_fetch_array($sqlEmail)){
        $emailx =$line['email'];
      //  echo $emailx."<br>";
     //verificando se o email existe
      if($emailx == $email){
         $email_user = $emailx;
      } 
    }
    
  //  echo $email_user;
    
    
// se a variavel registro é true então faça o processo de inserção
if ($registro == true && @$email_user != $email) {
      
    @$id = $id + 1; //Sempre vai ter um id acima do ultimo
    $pasta = "user" . $id;  //cria a pasta

    if (file_exists("user/" . $pasta)) {
        echo "<script>"
        . "alert('Essa pasta já existe!');"
        . "window.history.go(-1)"
        . "</script>";
    } else {
        
        mkdir("user/" . $pasta, 0777);
        //cria um variavel array com os formatos validos para imagens
        $formatos = array(1 => 'image/png', 2 => 'image/jpg', 3 => 'image/jpeg', 4 => 'image/gif');
        $teste = array_search($tipo, $formatos); // essa função procura esse tipo dentro do vetor
        
        if ($teste == true) {
            move_uploaded_file($_FILES['foto']['tmp_name'], "user/" . $pasta . "/" . $foto);
            // echo "Voce pode publicar esta imagem";
        } else {
            echo "<script>"
            . "alert('Esse arquivo não é suportado!');"
            . "window.history.go(-1)"
            . "</script>";
        } 
       
        // echo "<script>alert('A pasta " . $pasta . " foi criada com sucesso')</script>";
    }

  
    //Pegando a data e a hora do computador
    $dt = date('Y-m-d');
    $hr = date('H:i:s');

    //cadastrando um novo usuario e direcionando ele para tela principal
    mysqli_query($link, "insert into tb_user(nome, email, senha, lembrete, foto, nivel, dt, hr) values "
            . "('$nome', '$email', '$senha', '$lembrete', '$foto', 1, '$dt', '$hr')");

    echo "<p style='text-align:center;color:#333; padding:5px;'>Usuario Cadastrado com sucesso! <br>";
    echo "<a href='index.php' style='color:#59f'>Ir para Home</a> | <a href='login.php' style='color:#59f'>Login</a>";
    echo "</p>";
    
   
    
  /*  echo "<script>"
    . "alert('Usuario cadastrado com sucesso!');"
    . "window.location.href='index.php';"
    . "</script>"; */
    
    
} else {
      echo "<script>"
            . "alert('Esse email já esta cadastrado!');"
            . "window.location.href='index.php';"
            . "</script>"; 
}
    /*
      //substituindo caracteres indesejados
      $foto = str_replace(" ","_",$foto);
      $foto = str_replace("â","a",$foto);

      //passando para minusculoas
      $foto = strtolower($foto)
     */
?>


   