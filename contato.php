<html>
	<head>	
	
	<?php header("Content-Type: text/html; charset=iso-8859-1",true) ?>	

	<title> Site em php</title>
	<link rel="stylesheet" type="text/css" href="css/formato.css">
	  
	</head>
	<body>
		
        <div id="geral"> <!--come�o -->
		<div id="topo">
			<?php include "topo.php"; ?>			
		</div>

		<div id="menu">
			<?php include "menu.php"; ?>
		</div>

		<div id="conteudo">
                    <br>
                    <form action="cad_contato.php" method="POST">
                        <label class="legenda">Nome:</label><br>
                        <input type="text" name="nome" class="campos" placeholder="Digite o seu nome..." required><br>
                        
                        <label class="legenda">E-mail:</label><br>
                        <input type="email" name="email" class="campos" placeholder="Digite o seu Email..." required><br>
                        
                        <label class="legenda">Assunto:</label><br>
                        <input type="text" name="nome" class="campos" placeholder="Digite o que deseja informar..." required><br>
                        <br>
                        <textarea name="conteudo" class="campos2" placeholder="Digite em menos de 140 caracteres o conteudo" maxlength="140"></textarea><br>
                        <br>
                        <input type="submit" value="Enviar" class="bt_enviar">
                      
                    </form>
		</div>

		<div id="rodape">
			<?php include "rodape.php"; ?>
	         </div>
	  </div><!--Fim-->
	</body>
</html>