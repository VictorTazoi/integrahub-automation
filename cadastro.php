<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IntegraHub Automation</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/elements.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong>IntegraHub</strong> | Cadastro</a>
                <a href="login.php" class="btn btn-secondary">Voltar</a>
            </div>
        </nav>

        <div class="container caixa-input">
            <div class="card card-input">
                <br>
                <p class="titulo">Cadastro</p>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="signupName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="signupName" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="signupSurname" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="signupSurname" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="signupEmail" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="signupPassword" required="true">
                        </div>
                        <hr>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'php/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>
