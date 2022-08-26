<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produto</title>
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
                            <form method="GET" action="controleProduto.php" autocomplete="off" enctype="multipart/form-data">
                                <h1 style="text-align:center; font-size:25px; padding:15px; color:blue;">
                                    Cadastrar Produto</h1>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" placeholder="Digite o codigo" required
                                        name="codProduto">
                                    <label>Digite o codigo</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Digite a descrição"
                                        name='cadastrarDescricao' required>
                                    <label f>Digite a descrição</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Cadastrar Valor"
                                        name='cadastrarValor' required>
                                    <label>Cadastrar Valor</label>
                                </div>
                                <div style="margin-bottom:10px">
                                    <input type="file" class="form-control" placeholder="Insira a Imagem"
                                        name='cadastrarFigura' required>
                                </div>
                                    
                                <div class="row m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        style="font-size:16px;" value="cadastrar" name="botao">Cadastrar</button>
                                </div>
                                <div class="row m-auto">
                                    <button type="button" class="btn btn-primary btn-lg btn-block"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        style="font-size:16px; margin-top:5px">
                                        Deletar
                                    </button>
                                </div>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apagar Produto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action='controleProduto.php' method='GET'>
                                                <div class="form-floating mt-3 mb-3">
                                                    <input type="number" class="form-control"
                                                        placeholder="deletarCodigo" name='codProduto' min="0" required>
                                                    <label>Insira o Codigo</label>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary" value="deletar"
                                                name="botao">Apagar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top:5px">
                                <div class="row m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        style="font-size:16px;"
                                        onclick="window.location.href='../AreaAdm.php'">Voltar</button>
                                </div>
                            </div>

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