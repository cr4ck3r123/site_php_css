<html>
    <head>	

        <?php header("Content-Type: text/html; charset=iso-8859-1", true) ?>	

        <title> Site em php</title>
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
                var email = formlogin.email.value;
                var senha = formlogin.senha.value;
                //  alert(email);
                if (email == "" || senha == "") {

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
            <h1 class="titulos" style="margin-left: 10%">Tela de Login
                <?php
                @$v = $_GET['valor'];
                if ($v) {
                    echo " - <span style='color:red'> Todos os campos devem ser preechidos </span>";
                }
                ?>
            </h1> 
            <form name="formlogin" action="logar.php" method="POST" enctype="multipart/form-data"> 

                <input type="email" name="email" class="campos" placeholder="E-mail">
                <input type="password" name="senha" class="campos" placeholder="Senha">
                <div id="botoes">
                    <input type="submit" onclick="return validar()" value="Logar" id="btnClick" class="bt_cad">
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
        <!--
                <script>
                    $("#btnClick").click(function () {
                        // swal("Inserido com Sucesso!");         
                        var nome = $("#nome").val();
                        if (nome == '') {
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
        
        -->
    </body>

</html>
