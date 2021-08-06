<?php
    function rotas($URL) {
        $parametros = explode("/", $URL);

        switch ($parametros[0]) {
            case "":
                include_once("view_principal.php");
                break;
            case "cadastrar":
                include_once("view_cadastrar.php");
                break;
            default:
                echo("Ação Inválida!");
                break;
        }
    }
?>