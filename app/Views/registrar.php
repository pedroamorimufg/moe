<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-6">
                <h1>Registrar</h1>
                <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/registrar/save" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail"
                            value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3" id="tipoUsuario">
                        <label class="form-label">Tipo de usuário</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Estagiário
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" value="2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Empresa
                            </label>
                        </div>
                    </div>
                    <div id="aluno">
                        <div class="mb-3">
                            <label for="InputForEstNome" class="form-label">Nome do aluno</label>
                            <input type="text" name="est_nome" class="form-control" id="InputForEstNome">
                        </div>
                        <div class="mb-3">
                            <label for="InputForEstCurso" class="form-label">Curso</label>
                            <input type="text" name="est_curso" class="form-control" id="InputForEstCurso">
                        </div>
                        <div class="mb-3">
                            <label for="InputForEstAno" class="form-label">Ano de ingresso</label>
                            <input type="text" name="est_ano" class="form-control" id="InputForEstAno">
                        </div>
                        <div class="mb-3">
                            <label for="InputForEstCurriculo" class="form-label">Minicurrículo</label>
                            <textarea name="est_curriculo" class="form-control" id="InputForEstCurriculo"></textarea>
                        </div>
                    </div>
                    <div id="empresa" style="display:none">
                        <div class="mb-3">
                            <label for="InputForEmpresaNome" class="form-label">Nome da empresa</label>
                            <input type="text" name="empresa_nome" class="form-control" id="InputForEmpresaNome">
                        </div>
                        <div class="mb-3">
                            <label for="InputForEmpresaEndereco" class="form-label">Endereço</label>
                            <textarea name="empresa_endereco" class="form-control"
                                id="InputForEmpresaEndereco"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="InputForEmpresaContato" class="form-label">Nome do contato</label>
                            <input type="text" name="empresa_contato" class="form-control" id="InputForEmpresaContato">
                        </div>
                        <div class="mb-3">
                            <label for="InputForEmpresaDescricao" class="form-label">Descrição da empresa</label>
                            <textarea name="empresa_descricao" class="form-control"
                                id="InputForEmpresaDescricao"></textarea>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirmar senha </label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    <script>
    $(document).ready(function() {
        $('#tipoUsuario input:radio').click(function() {
            if ($(this).val() === '1') {
                $('#aluno').show();
                $('#empresa').hide();
            } else if ($(this).val() === '2') {
                $('#aluno').hide();
                $('#empresa').show();
            }
        });
    });
    </script>
</body>

</html>-