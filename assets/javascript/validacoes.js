$(function () {
    $('#login').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroUser") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Usuário ou Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroPass") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Senha vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "SucessoCliente") {
                    Swal.fire({
                        title: 'Conta encontrada com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/cliente.php");
                        }
                    })
                }
                if (data == "SucessoADM") {
                    Swal.fire({
                        title: 'Conta encontrada com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/administrador.php");
                        }
                    })
                }
                if (data == "SucessoFuncionario") {
                    Swal.fire({
                        title: 'Conta encontrada com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/funcionario.php");
                        }
                    })
                }
                if (data == "FalhaLogin") {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Usuário ou senha inválidos!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function () {
    $('#cadastro').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Nome vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroEmail") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroEmailExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Email já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroCPF") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo CPF vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroCpfExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'CPF já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroUserName") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Usuario vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroUserNameExiste") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Usuário já está cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroSenha") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Senha vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroConfSenha") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Confirmar Senha vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroSenhaNaoConfere") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'As senhas não conferem!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroTipo") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Tipo vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroBanco") {
                    Swal.fire({
                        title: 'Erro ao cadastrar',
                        text: 'Não foi possivel efetuar o cadastro!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        title: 'Cadastro realizado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/login.php");
                        }
                    })
                }
                
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function () {
    $('#produtos').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroCodBarras") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Codigo de Barras Vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroNome") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Senha vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo descrição vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Preço vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "ErroEstoque") {
                    Swal.fire({
                        title: 'Erro ao preencher campos',
                        text: 'Campo Estoque vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        title: 'Cadastro realizado com sucesso',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("../view/funcionario.php");
                        }
                    })
                }
                
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora