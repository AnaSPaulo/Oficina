
<?php
class Produto {
    public $nome;
    public $codigo;
    public $marca;
    public $categoria;
    public $descricao;
    public $preco;
    public $quantidade;
    public $fornecedor;
    public $garantia;
    public $estoqueMinimo;

    public function __construct($nome, $codigo, $marca, $categoria, $descricao, $preco, $quantidade, $fornecedor, $garantia, $estoqueMinimo) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->fornecedor = $fornecedor;
        $this->garantia = $garantia;
        $this->estoqueMinimo = $estoqueMinimo;
    }
}
?>
