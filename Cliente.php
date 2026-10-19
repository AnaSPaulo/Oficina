
<?php
class Cliente {
    public $nome;
    public $cpf;
    public $rg;
    public $dataNascimento;
    public $telefone;
    public $email;
    public $endereco;
    public $numero;
    public $cidade;
    public $estado;
    public $cep;

    public function __construct($nome, $cpf, $rg, $dataNascimento, $telefone, $email, $endereco, $numero, $cidade, $estado, $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }
}
?>
