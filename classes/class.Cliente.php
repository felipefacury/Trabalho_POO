<?php
require_once __DIR__ . '/../global.php';

class Cliente extends Pessoa {

  private Paciente $_paciente;
  private Pagamento $_forma_de_pagamento;

  public function __construct($p_nome, $p_email, $p_telefone_de_contato, $rg, $paciente, $forma_de_pagamento) {
    parent::__construct($p_nome, $p_email, $p_telefone_de_contato);
    $this->_rg = $rg;
    $this->_paciente = $paciente;
    $this->_forma_de_pagamento = $forma_de_pagamento;
  }

  public function set($atributo, $valor) {
    $this->$atributo = $valor;
  }

  public function _rg() {
    return $this->_rg;
  }

  public function _paciente() {
    return $this->_paciente;
  }

  public function _forma_de_pagamento() {
    return $this->_forma_de_pagamento;
  }
}