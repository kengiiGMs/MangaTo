<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleAdm.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="cadastroProduto/produto.php" id="linkMenuAdm">Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Perfils/perfils.php" id="linkMenuAdm">Perfils</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Mensagens/mensagens.php" id="linkMenuAdm">Mensagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Site/index.php" id="linkMenuAdm">Sair</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top:20px">
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Produto</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Perfil</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mensagen-tab" data-bs-toggle="tab" data-bs-target="#mensagem-tab-pane" type="button" role="tab" aria-controls="mensagem-tab-pane" aria-selected="false">Mensagens</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="container">
                    <h5 style="text-align:center; margin-top:20px">Informações sobre os Produto</h5>
                    <div class="container"> 
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text" style="text-align:center">Quantidade de Produtos</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="container">
                    <h5 style="text-align:center; margin-top:20px">Informações sobre os Perfils</h5>
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text" style="text-align:center">Quantidades de Perfils</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="tab-pane fade" id="mensagem-tab-pane" role="tabpanel" aria-labelledby="mensagem-tab" tabindex="0">
                <div class="container">
                    <h5 style="text-align:center; margin-top:20px">Informações sobre as Mensagens</h5>
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text" style="text-align:center">Quantidade de Mensagens</p>
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