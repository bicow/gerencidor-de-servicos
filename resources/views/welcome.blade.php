<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.min.js'
    ])
</head>
<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <h3>Cadastrar - Agendamento de potenciais Clientes</h3><br>
            <h6>Sistema utilizado para agendamento de serviços.</h6><br>
            <h6>Nome:</h6>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <h6>Telefone:</h6>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <input type="text" placeholder="(xx)xxxx-xxxx" class="form-control">
                </div>
            </div>

            <h6>Origem:</h6>
            <div class="col-sm-10 mb-3">
                <select class="form-control col-sm-10 mb-3" name="origins" id="origins">
                    <option value="Celular">Celular</option>
                    <option value="Telefone Fixo">Telefone</option>
                </select>
            </div>

            <h6>Data do contato:</h6>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <input type="date" placeholder="dd/mm/aa" class="form-control">
                </div>
            </div>

            <h6>Observação:</h6>
            <div class="form-floating col-sm-10 mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
            </div>
        <button type="button" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</body>
</html>