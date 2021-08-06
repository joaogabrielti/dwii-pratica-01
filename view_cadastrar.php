<?php
    include_once("modelo.php");
    if (isset($_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["endereco"]) && isset($_POST["telefone"])) {
        $pessoa = new Pessoa($_POST["cpf"], $_POST["nome"], $_POST["endereco"], $_POST["telefone"]);
        salvarArquivoPessoas($pessoa);
    }
?>

<form class="row g-2" action="" method="POST">
    <input type="hidden" name="form_submit" value="OK">
    <input type="hidden" name="acao" value="cadastrar">
    <?php if (isset($pessoa)) { ?>
    <div class="col-12">
        <div class="alert alert-success" role="alert">
            Pessoa cadastrada com sucesso!
        </div>
    </div>
    <?php } ?>
    <div class="col-6">
        <label class="form-label mb-0" for="nome">Nome Completo</label>
        <input class="form-control" type="text" name="nome" value="" placeholder="Nome Completo" required autofocus>
    </div>
    <div class="col-6">
        <label class="form-label mb-0" for="cpf">CPF</label>
        <input class="form-control" type="text" name="cpf" value="" placeholder="CPF" required>
    </div>
    <div class="col-6">
        <label class="form-label mb-0" for="endereco">Endereço</label>
        <input class="form-control" type="text" name="endereco" value="" placeholder="Endereço" required>
    </div>
    <div class="col-6">
        <label class="form-label mb-0" for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" value="" placeholder="Telefone" required>
    </div>
    <div class="col-6">
        <a class="btn btn-secondary w-100" href="">Voltar</a>
    </div>
    <div class="col-6">
        <button class="btn btn-success w-100" type="submit">Cadastrar</button>
    </div>
</form>