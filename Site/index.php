<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .button-85 {
        margin-top: 10px;
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: white;
        background: transparent;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-85:before {
        content: "";
        background: linear-gradient(45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        left: 0;
        top: 0;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" id="linkMenu" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="linkMenu" href="../Adm/cadastroProduto/produto.php">Produtos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="email" placeholder="Usuario" aria-label="Search"
                            required>
                        <input class="form-control me-2" type="password" placeholder="Senha" aria-label="Search"
                            required>
                        <button class="btn btn-outline-info" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid" id="containerPrincipalBTN">
        <div class="container" id="containerBTN">
            <div class="row">
                <H2 style="color:white; text-align:center; margin-bottom:20px">Seja Bem-Vindo!!!</H2>
                <div class="col">
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-info btn-block" id="cadastro"
                            onclick="window.location.href='cadastroPerfil/cadastrarCliente.php'">Cadastro Login</button>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-info" id="faleConosco"
                            onclick="window.location.href='faleConosco/faleConosco.php'">Fale Conosco</button>
                    </div>
                </div>


                <button class="button-85" role="button"
                    onclick="window.location.href='../Adm/AreaAdm.php'">ADMINISTRAÇÃO</button>

            </div>
        </div>
    </div>
    <div class="container" id="containerProdutos">
        <div class="row m-auto">
            <div class="col" style="text-align:center">
                <div class="container">
                    <div class="card" style="width: 18rem;" id="cards1"><a href="#">
                            <img src="img/imagem1.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="text-align:center">
                <div class="container">
                    <div class="card" style="width: 18rem;" id="cards2">
                        <a href="#">
                            <img src="img/imagem2.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="text-align:center">
                <div class="container">
                    <div class="card" style="width: 18rem;" id="cards3">
                        <a href="#">
                            <img src="img/imagem3.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>