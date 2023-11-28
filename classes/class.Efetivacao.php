<?php
require_once __DIR__ . '/../global.php';

class Efetivacao {

  private          $_pagamentos = [];
  private float    $_valor = 0.0;
  private DateTime $_data_pagamento;

  public function __construct($pagamentos, $valor) {
    $this->_valor = $valor;
    $this->_pagamentos = array_merge($this->_pagamentos, $pagamentos);
  }
  
}
?>