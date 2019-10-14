<html>
    <head>	

        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	

        <title> Cadastro </title>
        <!-- lib scripts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        <link href="css/formato.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

        <script type="text/javascript">

            function validar() {
                var email = formCliente.email.value;
                var senha = formCliente.senha.value;
                var repetesenha = formCliente.repetesenha.value;
                var lembrete = formCliente.lembrete.value;
                //  alert(email);
                if (email == "" || senha == "" || repetesenha == "" || lembrete == "") {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Preecha todos os campos!',                       
                    });
                    //   formlogin.nome.focus();
                    return false;
                }
            }
        </script>

    </head>
    <body>


        <div id="form_cadastro">
            <br>
            <h1 class="titulos" style="margin-left: 10%">Cadastre-se</h1> 
           <form name="formCliente" action="cadastrar.php" method="POST" enctype="multipart/form-data"> 
         
                <input type="text" name="nome" class="campos" placeholder="Nome">
                <input type="email" name="email" class="campos" placeholder="Email">
                <input type="password" name="senha" class="campos" placeholder="Senha">
                <input type="password" name="repetesenha" class="campos" placeholder="Confirmar Senha">
                <input type="text"  name="lembrete" class="campos" placeholder="Lembrete">
                <input type="file" name="foto" class="campos">
                <div id="botoes">
                    <input type="submit" value="Cadastrar" onclick="return validar()" id="btnClick" class="bt_cad">
                    <input type="reset" value="Limpar" class="bt_cad">
                </div>   
            </form>
            <div class="botoes">
                <a href="index.php" class="form_link">&lAarr; Voltar para a pagina principal</a>
                <label class="label">Ja possui cadastro? Entao clique no link para fazer o login </label>              
                <a href="login.php" class="label">Faca o login</a>
            </div> 
            <div class="mostrar"></div>
        </div> 

       
    </body>

</html>
