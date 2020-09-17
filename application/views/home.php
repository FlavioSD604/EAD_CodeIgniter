<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW - III Codelgniter</title>
    <!-- <link href="c:/xampp/htdocs/EAD_CodeIgniter/assets/css-padrao/css-padrao.css"> -->
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color: skyblue;
        }
    </style>
</head>

<body>

    <div class="jumbotron h-100 mt-5">
        <div class="col-lg-12 text-center my-4">
            <h1 class="display-3">BEM-VINDO!</h1>
            <h1 class="display-4">SEMPRE UM PRAZER RECEBER VOCÊ</h1>
        </div>
        <div>
            <div class="form-row">
                <div class="my-3 ml-auto">
                    <a class="nav-link lead" href="<?php echo base_url('index.php/Welcome/login');?>">Já sou Cadastrado</a>
                </div>
                <div class="my-3 mr-auto">
                    <a class="nav-link lead" href="<?php echo base_url('index.php/Welcome/cadastro');?>">Preciso me Cadastrar</a>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
</body>

</html>