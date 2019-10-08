<?php
//Arquivo logar 

include "connect.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

if($email != "" && $senha != ""){
  //  echo "Usuario esta logando";
 $sql = mysqli_query($link, "select * from tb_user where email='$email' and senha='$senha' limit 1");
 $registro = mysqli_num_rows($sql);   
 //echo $registro;
 while($line = mysqli_fetch_array($sql)){
     $senha_user = $line['senha'];
 }
 if($registro){
     
 }else{
     echo 'Voce nao possui cadastro, Deseja se cadastrar';
     echo "<a href='form_cadastro.php'>Cadastre-se</a>";
 }
}  else {
    header('location:login.php?valor=1');
  //  echo "É necessario preecher todos os campos e possuir um cadastro";
}





?>

