<?php
session_start();
?>

<?php if(isset($_SESSION['logado'])): ?>

<h1>Usuário Logado</h1>
<a href="sair.php">Sair do sistema</a>

<?php else: ?>
<h1>Pagina Restrita, volte e tente novamente</h1>
<a href="sessoes.php">Logar no sistema</a>
<?php endif; ?>