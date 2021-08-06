<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>DWII - Prática 01</title>
</head>
<body class="d-flex flex-column justify-content-center">
    <div class="container mt-2">
        <form action="" method="POST">
            <input type="hidden" name="form_submit" value="OK">
            <button class="btn btn-primary w-100" name="acao" value="cadastrar">Cadastrar Nova Pessoa Física</button>
        </form>
        <hr>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);

            include_once("controle.php");

            if (!empty($_POST["form_submit"])) {
                rotas($_POST["acao"]);
            } else {
                rotas("");
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>