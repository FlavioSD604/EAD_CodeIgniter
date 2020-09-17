<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color:lightgreen;
        }
    </style>
</head>

<body>
    <div class="jumbotron h-100 mt-5">
        <div class="w-50 h-100 mx-auto bg-white">
            <h1 class="text-center text-dark">CADASTRO</h1>
            <h2 class="text-center text-dark">INSIRA SEUS DADOS NOS CAMPOS ABAIXO</h2>
            <form action="../controller/validarCadastro.php" method="POST" id="cadastro">
                <div class="form-row col-8 mx-auto mt-5">
                    <input class="form-control col-15" type="text" placeholder="Digite seu Nome" name="nome">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <input class="form-control col-15" type="text" placeholder="Digite seu Email" name="email">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <input class="form-control col-15" type="text" placeholder="Digite seu CPF" name="cpf">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <input class="form-control col-15" type="text" placeholder="Digite seu Nome de Usuário " name="userName">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <input class="form-control col-15" type="password" placeholder="Digite sua Senha" name="senha">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <input class="form-control col-15" type="password" placeholder="Confirmar sua Senha" name="confirmar">
                    <div class="col-4"></div>
                </div>
                <div class="form-row col-8 mx-auto mt-3">
                    <select id="" class="form-control col-15" type="text" name="tipo">
                        <option selected>Tipo Cliente</option>
                    </select>
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-outline-success col-5 mx-auto" type="submit" value="Enviar">
                </div>
            </form>
            <div class="form-row col-10 mx-auto mt-3"></div>
        </div>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
</body>

</html>