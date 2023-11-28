<?php
require_once __DIR__ . '/../global.php';

class Horario_trabalho {

    private DateTime $_data;
    private DateTime $_hora_inicio;
    private DateTime $_hora_termino;

    public function __construct($_data, $_hora_inicio, $_hora_termino) {
        $this->_data = $_data;
        $this->_hora_inicio = $_hora_inicio;
        $this->_hora_termino = $_hora_termino;
    }

    public function _data() {
        return $this->_data;
    }

    public function _hora_inicio() {
        return $this->_hora_inicio;
    }

    public function _hora_termino() {
        return $this->_hora_termino;
    }

    public function set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
