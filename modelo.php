<?php
class Pessoa {
    public $cpf;
    public $nome;
    public $endereco;
    public $telefone;

    public function __construct($cpf, $nome, $endereco, $telefone) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
}

function lerArquivoPessoas() {
    $pessoas = array();

    $fp = fopen("pessoas.dat", "r");
    if ($fp) {
        while(!feof($fp)) {
            $linha = trim(fgets($fp));
            if (!empty($linha)) {
                $dados = explode(";", $linha);
                array_push($pessoas, new Pessoa($dados[0], $dados[1], $dados[2], $dados[3]));
            }
        }
    }
    fclose($fp);

    return $pessoas;
}

function salvarArquivoPessoas(Pessoa $pessoa) {
    $pessoas = lerArquivoPessoas();
    array_push($pessoas, $pessoa);

    $fp = fopen("pessoas.dat", "w");
    if ($fp) {
        foreach ($pessoas as $p) {
            $linha = $p->cpf.";".$p->nome.";".$p->endereco.";".$p->telefone.PHP_EOL;
            fwrite($fp, $linha);
        }
    }
    fclose($fp);
}
?>