<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color:lightseagreen;
        }
    </style>
</head>

<body>

    <div class="jumbotron h-100 mt-5">
        <div class="w-50 h-100 mx-auto bg-white">
            <h1 class="text-center text-dark">BEM-VINDO</h1>
            <h2 class="text-center text-dark">FAÇA LOGIN EM NOSSA PLATAFORMA</h2>
            <form action="<?php echo base_url('index.php/Login/validarLogin'); ?>" method="POST" id="login">
                <div class="form-row col-8 mx-auto mt-5">
                    <input class="form-control col-15" type="text" placeholder="Digite aqui seu email ou usuário" name="user">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3 mb-5">
                    <input class="form-control col-15" type="password" placeholder="Digite aqui sua senha" name="pass">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-outline-success col-5 mx-auto" type="submit" value="ENTRAR">
                </div>
                <div>
                    <a class="nav-link lead text-center" href="#">Esqueci minha senha</a>
                </div>
            </form>
        </div>
    </div>




    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
</body>

</html>