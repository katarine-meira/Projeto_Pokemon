<?php 


class Pokemon{

    public $nome;
    public $nivel;
    public $tipo;
    public $foto;

    public function __construct($nome, $nivel, $tipo, $foto){
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->tipo = $tipo;
        $this->foto = $foto;
    }
}