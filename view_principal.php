<?php
    include_once("modelo.php");
?>
<table class="table table-sm table-striped table-bordered table-hover" style="vertical-align: middle;">
    <thead class="table-secondary">
        <th>CPF</th>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>TELEFONE</th>
        <th>AÇÕES</th>
    </thead>
    <tbody>
        <?php foreach (lerArquivoPessoas() as $pessoa) { ?>
        <tr>
            <td><?=$pessoa->cpf?></td>
            <td><?=$pessoa->nome?></td>
            <td><?=$pessoa->endereco?></td>
            <td><?=$pessoa->telefone?></td>
            <td class="text-center">
                <button type="submit" name="acao" value="alterar/1"><i class="bi bi-pencil-fill"></i></button>
                <button type="submit" name="acao" value="excluir/1"><i class="bi bi-x-lg"></i></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>