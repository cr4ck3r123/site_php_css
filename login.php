<html>
    <head>	

        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	

        <title> Site em php</title>
        <!-- lib scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    </head>
    <body>


        <div id="form_cadastro">
            <br>
            <h1 class="titulos" style="margin-left: 10%">Tela de Login</h1> 
           <form action="logar.php" method="POST" enctype="multipart/form-data"> 
         
                <input type="email" name="email" class="campos" placeholder="Nome">
                <input type="password" name="senha" class="campos" placeholder="Senha">
                <div id="botoes">
                    <input type="submit" value="Logar" id="btnClick" class="bt_cad">
                    <input type="reset" value="Limpar" class="bt_cad">
                </div>   
            </form>
            <div class="botoes">
                <a href="index.php" class="form_link">&lAarr; Voltar para a pagina principal</a>
                <p class="p_form">Ainda não possui cadastro? Entao clique no link abaixo para fazer o login</p>
                <a href="form_cadastro.php" class="form_link">Cadastre-se</a>
            </div> 
            <div class="mostrar"></div>
        </div> 

        <script>
            $("#btnClick").click(function(){
               // swal("Inserido com Sucesso!");         
               var nome = $("#nome").val();               
               if(nome == ''){
                 swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Algo deu errado!',
                    footer: '<a href>Porque tenho esse problema?</a>'
                });
                //alert('Senhas diferentes!!!!');window.history.go(-1);
            }
        });
        
        </script>
    </body>

</html>
