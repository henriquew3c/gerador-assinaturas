<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Honorio Henrique">
        <link rel="icon" href="inc/favicon.ico">

        <title>Gerador de Assinaturas</title>

        <!-- Bootstrap core CSS -->
        <link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="inc/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Select 2 css-->
        <link href="inc/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- JAVASCRIPT -->

        <script src="inc/select2/vendor/jquery-2.1.0.js"></script>
        <script src="inc/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="inc/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js"></script>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="inc/js/ie-emulation-modes-warning.js"></script>
        <script src="inc/bootstrap/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.selectpicker').selectpicker();
            });
        </script>
    </head>

    <body>
        <div class="container">
            <div class="header clearfix" style="margin-top: 20px">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
                    </ul>
                </nav>
                <h3 class="text-muted">Gerador de Assinaturas </h3>
            </div>

            <div class="jumbotron">
                <h4>Formulário Gerador de assinaturas</h4>
                <br/>
                <form class="form-horizontal" role="form" action="processar.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome Completo:</label>
                        <div class="col-sm-10">
                            <input type="nome" name="nome" class="form-control" id="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="funcao">Função:</label>
                        <div class="col-sm-10">
                            <input type="funcao" class="form-control" id="funcao" name="funcao">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="exemplo" aria-describedby="basic-addon2" name="email" style="width: 200px">
                            </div>
                            <span style="float: right; margin-top: -34px; margin-right: 425px" id="basic-addon2">
                                <select name="tp_email" id="tp_email" class="selectpicker show-tick">
                                    <option data-subtext="Email externo" value="@tel.inf.br">@tel.inf.br</option>
                                    <option data-subtext="Email interno" value="@teltelematica.com.br">@teltelematica.com.br</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefone">Telefone:</label>
                        <div class="col-sm-10">
                            <input name="telefone" type="telefone" class="form-control" id="telefone" placeholder="(99) 9999-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="site">Site:</label>
                        <select name="site" id="site" class="col-sm-5 selectpicker show-tick" data-live-search="true">
                            <option data-subtext="Salvador - BA"         value="1">ACM</option>
                            <option data-subtext="Brasília - DF"         value="2">ANVISA</option>
                            <option data-subtext="Feira de Santana - BA" value="3">FSABA</option>
                            <option data-subtext="Salvador - BA"         value="4">GARCIA (ADM)</option>
                            <option data-subtext="Palmas - TO"           value="5">INSSPALMAS</option>
                            <option data-subtext="São Paulo - SP"        value="6">JAGUARE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

            <footer class="footer">
                <p>&copy; Desenvolvido pela Seção de Tecnologia da Informação, Palmas, TO 2015 <br/> Telefone: 63 3026-0465 | Email: suporteto@teltelematica.com.br</p>
            </footer>

        </div> <!-- /container -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="inc/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
