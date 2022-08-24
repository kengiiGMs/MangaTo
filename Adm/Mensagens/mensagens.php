<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta Mensagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../AreaAdm.php">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../cadastroProduto/produto.php">Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Perfils/perfils.php">Perfils</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mensagens.php">Mensagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Site/index.php">Sair</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top:20px">
        <div class="overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style='text-align:center;'>#</th>
                        <th scope="col" style='text-align:center;'>assunto</th>
                        <th scope="col" style='text-align:center;'>obs </th>
                        <th scope="col" style='text-align:center;'>data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../../conexao.php';
                        $sql = "SELECT * FROM mensagem";
                        $banco = new conexao();
                        $con = $banco->getConexao();
                        $resultado = $con->query($sql);
                        while($row = $resultado->fetch()){
                            echo "<tr>";
                            echo "<td style='text-align:center;'>".$row['codigo_mensagem']."</td>";
                            echo "<td style='text-align:center;'>".$row['assunto']."</td>";
                            echo "<td style='text-align:center;'>".$row['obs']."</td>";
                            echo "<td style='text-align:center;'>".$row['dataMensagem']."</td>";
                            echo "</tr>";
                        }
                        /* Durante os Echo não podemos add aspas duplas dentro de aspas duplas, pois da erro */
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>