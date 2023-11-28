<?php
require_once __DIR__ . '/../global.php';

class Agenda {

    private                  $_horario_trabalho_padrao = ['segunda'=>null,'terça'=>null,'quarta'=>null,'quinta'=>null,'sexta'=>null];
    private Horario_trabalho $_horario_trabalho_excepcional;
    private Horario_trabalho $_horarios_ocupados;
  
    public function __construct($horario_trabalho_padrao = [], $horario_trabalho_excepcional, $horarios_ocupados) {
      
        $this->_horario_trabalho_padrao = $horario_trabalho_padrao;
        $this->_horario_trabalho_excepcional = $horario_trabalho_excepcional;
        $this->_horarios_ocupados = $horarios_ocupados;
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