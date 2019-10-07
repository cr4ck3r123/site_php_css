<html>
    <head>	

        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	

        <title> Site em php</title>
        <!-- lib scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.5.min.js"></script>

        <link rel="stylesheet" src="sweetalert.css"/>
        <script src="sweetalert.js"></script>


    </head>
    <body>


        <div id="form_cadastro">
            <br>
            <h1 class="titulos" style="margin-left: 10%">Cadastre-se</h1> 
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="nome" class="campos" placeholder="Nome">
                <input type="email" name="email" class="campos" placeholder="Email">
                <input type="password" name="senha" class="campos" placeholder="Senha">
                <input type="password" name="repetesenha" class="campos" placeholder="Confirmar Senha">
                <input type="text"  name="lembrete" class="campos" placeholder="Lembrete">
                <input type="file" name="foto" class="campos">
                <div id="botoes">
                    <input type="submit" value="Cadastrar" id="btnClick" class="bt_cad">
                    <input type="reset" value="Limpar" id="btnClick" class="bt_cad">
                </div>   
            </form>
            <div class="botoes">
                <a href="index.php" class="form_link">&lAarr; Voltar para a pagina principal</a>
                <p class="p_form">Ja possui cadastro? Entao clique no link para fazer o login</p>
                <a href="login.php" class="form_link">Logar</a>
            </div> 
            <div class="mostrar"></div>
        </div> 

        <script>
            $(document).ready(function () {
                $("btnClick").on('click', function () {
                    swal("Inserido com Sucesso!");
                    /*   Swal.fire(
                     'Good job!',
                     'You clicked the button!',
                     'success'
                     );*/
                });
            });
        </script>
    </body>

</html>
