
<img src="img/logo.png" class="logo"/>
<?php

include "connect.php";
session_start(); //recupera uma sessão em aberto
@$email = $_SESSION['login'];
@$sql = mysqli_query($link, "select * from tb_user where email = '$email'");
while (@$line = mysqli_fetch_array($sql)) {
    $nivel = $line['nivel'];
}

if (@$nivel == 1) {
    echo "<a href=logout.php class=links_topo>Sair</a>";
    echo "<a href=admin.php class=links_topo> Ir para Painel Admin </a>";
} else if (@$nivel == "") {
    echo "<a href=login.php class=links_topo>Logar</a>";
    echo "<a href=form_cadastro.php class=links_topo> Cadastre-se </a>";
} else {
    echo "<a href=logout.php class=links_topo>Sair</a>";
    echo "<a href=cliente.php class=links_topo> Ir para Cliente </a>";
}
?>
	