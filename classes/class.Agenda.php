<?php
require_once __DIR__ . '/../global.php';

class Agenda {

    private Horario_trabalho $_horario_trabalho_padrao;
    private Horario_trabalho $_horario_trabalho_excepcional;
    private Horario_trabalho $_horarios_ocupados;
  
    public function __construct($_horario_trabalho_padrao, $_horario_trabalho_excepcional, $_horarios_ocupados) {
      
        $this->_horario_trabalho_padrao = $_horario_trabalho_padrao;
        $this->_horario_trabalho_excepcional = $_horario_trabalho_excepcional;
        $this->_horarios_ocupados = $_horarios_ocupados;
    }

    public function _horario_trabalho_padrao() {
        return $this->_horario_trabalho_padrao;
    }

    public function _horario_trabalho_excepcional() {
        return $this->_horario_trabalho_excepcional;
    }

    public function _horarios_ocupados() {
        return $this->_horarios_ocupados;
    }

    public function cadastrar_horario_trabalho_excepcional($newHorarioTrabalhoExc) {
        $this->_horario_trabalho_excepcional = $newHorarioTrabalhoExc;
    }
  
    public function set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

?>