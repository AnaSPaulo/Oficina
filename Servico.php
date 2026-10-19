
<?php
class Servico {
    public $nome;
    public $codigo;
    public $descricao;
    public $categoria;
    public $valor;
    public $duracao;

    public function __construct($nome, $codigo, $descricao, $categoria, $valor, $duracao) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->valor = $valor;
        $this->duracao = $duracao;
    }
}

function calcularTotal($produtos, $servicos) {
    $total = 0;

    foreach ($produtos as $produto) {
        $total += $produto->preco * $produto->quantidade;
    }

    foreach ($servicos as $servico) {
        $total += $servico->valor;
    }

    return $total;
}
?>
