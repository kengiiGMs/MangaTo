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
                        <th scope="col" style='text-align:center;'>Ações</th>
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
                            echo "<td>
                            <a class='btn btn-sm btn-danger'
                            data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                    class='bi bi-file-earmark-excel' viewBox='0 0 16 16'>
                                    <path
                                        d='M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z' />
                                    <path
                                        d='M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z' />
                                </svg>
                            </a>
                            <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>Excluir Cesta</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                <p>Deseja Realmente excluir está cesta?</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-warning' data-bs-dismiss='modal'>Cancelar</button>
                                    <a class='btn btn-danger' href='mensagensDel.php?codigo_mensagem=$row[codigo_mensagem]'>Confirmar</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        
                        
                        </td>";
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