<?php

class Tarefas {
    private $id;
    private $id_status;
    private $tarefas;
    private $data_cadastro;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}

?>