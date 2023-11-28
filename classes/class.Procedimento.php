<?php
require_once __DIR__ . '/../global.php';

class Procedimento {
  
  private string         $_nome;
  private string         $_descricao;
  private float          $_valor;
  private int            $_numero_consultas;

  public function __construct($p_nome, $p_descricao, $p_valor, $p_numero_consultas) {

    $this->_nome = $p_nome;
    $this->_descricao = $p_descricao;
    $this->_valor = $p_valor;
    $this->_numero_consultas = $p_numero_consultas;

  }

  public function _nome() {
    return $this->_nome;
  }

  public function _descricao() {
    return $this->_descricao;
  }

  public function _valor() {
    return $this->_valor;
  }

  public function _numero_consultas() {
    return $this->_numero_consultas;
  }

  public function set_valor(float $p_valor) {
    $this->_valor = $p_valor;
  }
    
}

?>