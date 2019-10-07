<?php
include './connect.php';

// Arquivo de cadastro
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

$registro = false; 
if (!empty($nome) && !empty($email) && !empty($senha) && $lembrete != "" && $foto != "") {

    if ($senha != $resenha) {
        echo "<script>alert('Senhas diferentes!');window.history.go(-1);</script>";
    } else {
       // echo "Campos preechidos";
        $registro = true;
    }
} else {
 echo "<script>alert('É necessario preencher todos os campos!');window.history.go(-1);</script>";
}


if($registro == true){
  $sql = mysqli_query($link, "select * from tb_user order by id_user desc limit 1");
 
  while($line = mysqli_fetch_array($sql)){
  $id = $line['id_user'];
 }
  
 $id = $id+1;
 $pasta = "user".$id;
 
 if(file_exists($pasta)){
     echo "<script>alert('Essa pasta já existe!')</script>";
 }else{
      mkdir($pasta, 0777);
      echo "<script>alert('A pasta ".$pasta ."foi criada com sucesso')</script>";
 }
 

 
}

?>
