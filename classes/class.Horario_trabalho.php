<?php
require_once __DIR__ . '/../global.php';

class Horario_trabalho {

    private DateTime $_inicio;
    private DateTime $_termino;

    public function __construct($inicio, $termino) {
        $this->_inicio = $inicio;
        $this->_termino = $termino;
    }

    public function _hora_inicio() {
        return $this->_inicio;
    }

    public function _hora_termino() {
        return $this->_termino;
    }

}
