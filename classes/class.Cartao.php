<?php
require_once __DIR__ . '/../global.php';

abstract class Cartao extends Pagamento {
  protected string $_nome;
  protected string $_numero;
  protected DateTime $_vencimento_cartao; 
  protected int $_cvv;

  public function __construct(string $nome_pagamento, string $nome, string $numero, DateTime $vencimento_cartao, int $cvv) {
    parent::__construct($nome_pagamento);
    $this->_nome = $nome;
    $this->_numero = $numero;
    $this->_vencimento_cartao = $vencimento_cartao;
    $this->_cvv = $cvv;
  }

  public function _nome() {
  return $this->_nome;
}

public function _numero() {
  return $this->_numero;
}

public function _vencimento_cartao() {
  return $this->_vencimento_cartao;
}

public function _cvv() {
  return $this->_cvv;
}

public function verifica_numero_cartao() {
    $str = $this->_numero;
    $numbers = preg_replace("/[^0-9]/", "", $str);
    return strlen($numbers) == 16;
}

}

?>