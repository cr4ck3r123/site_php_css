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
			<?php include "conteudo.php" ?>
		</div>

		<div id="rodape">
			<?php include "rodape.php"; ?>
	         </div>
	  </div><!--Fim-->
	</body>
</html>