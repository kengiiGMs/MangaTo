<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:5%">
        <div class=" col-10 m-auto">
            <div class="row">
                <div class=" col-md-11 m-auto">
                    <div
                        style="background-color:white;border-radius:20px; padding-bottom:10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-width: 12px;">
                        <div class="container mt-3">
                            <form method="GET" action="controleCliente.php" autocomplete="off">
                                <h1 style="text-align:center; font-size:25px; padding:15px; color:blue;">
                                    Cadastrar</h1>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" placeholder="Digite o cpf" required
                                        name="cpf">
                                    <label>Digite o cpf</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Digite o nome"
                                        name='nomeCliente' required>
                                    <label f>Digite o nome</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Cadastrar Cidade" name='cidade'
                                        required>
                                    <label>Cadastrar a Cidade</label>
                                </div>
                                <select class="form-select" name="genero" style="margin-bottom:10px">
                                    <option value="M" class="genero" name="genero">Masculino</option>
                                    <option value="F" class="genero" name="genero">Feminino</option>
                                </select>
                                <div class="row m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        style="font-size:16px;" value="cadastrar" name="botao">Cadastrar</button>
                                </div>
                                <div style="margin-top:5px">
                                    <div class="row m-auto">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="font-size:16px;"
                                            onclick="window.location.href='../index.php'">Voltar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>