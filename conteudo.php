<div id="conteudo_principal">
    <div class="postagens">
        <?php
        include 'connect.php';
        $sql = mysqli_query($link, "select * from tb_postagem where page = 1 order by id_postagem desc");

        while ($line = mysqli_fetch_array($sql)) {
            $id = $line['id_postagem'];
            $titulo = $line['titulo'];
            $imagem = $line['imagem'];
            $conteudo = $line['texto'];
            $data = $line['dt'];
            $hora = $line['hr'];
            $id = $id - 1;
            ?>

            <div class="postagens">
                <h1 class="titulo"><?php echo $titulo; ?> </h1>
                <img src="postagens/<?php echo "post$id/" . $imagem ?>" class="imagem">
                <div class="paragrafo">
                    <p><?php echo $conteudo ?></p>
                    <span class="data"><?php
                        echo date('d/m/Y', strtotime($data));
                        echo "<br>" . date('H:i', strtotime($hora));
                        ?></span>
                </div>                   
            </div>
            <?php
        }
        ?>

        <div id="recentes">
            <h1 class="titulo">Recentes</h1>
            <div class="postagens_recentes">
                <h1 class="titulos"><a href="#">Titulo dos Arquivos recentes</a></h1>
                <span class="data">04/10/2019</span>
            </div>

        </div>

