<div id="conteudo_principal">
	<div class="postagens">
		<h1 class="titulo">Titulo da postagem</h1>
                   <?php
    include "connect.php";
    $sql = mysqli_query($link, "select * from tb_postagem where page = 1 order by id_postagem desc");
    while ($line = mysqli_fetch_array($sql)) {
        $titulo = $line['titulo'];
        $imagem = $line['imagem'];
        $conteudo = $line['texto'];
        $data = $line['dt'];
        ?>
		<img src="img/postagem.png" class="imagem">
		<p class="paragrafo">Paragrafo provisorio...</p>
		<span class="data">04/10/2019</span>
	</div>


	<div class="postagens">
		<h1 class="titulo">Titulo da postagem</h1>
		<img src="img/postagem.png" class="imagem">
		<p class="paragrafo">Paragrafo provisorio...</p>
		<span class="data">04/10/2019</span>
	</div>
</div>



