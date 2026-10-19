
<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $placa;
    public $combustivel;

    public function __construct($marca, $modelo, $ano, $cor, $placa, $combustivel) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->combustivel = $combustivel;
    }
}
?>
