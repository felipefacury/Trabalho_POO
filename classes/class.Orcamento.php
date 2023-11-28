<?php
require_once __DIR__ . '/../global.php'; 

class Orcamento {
  private           $_aprovado = false; 
  private Dentista  $_dentista_responsavel;
  private DateTime  $_data_orcamento; 
  private int       $_numero_procedimentos;
  private float     $_valor_total = 0.0;
  private           $_forma_pagamento = [];
  private           $_procedimento = []; // dúvida

  public  function __construct(Dentista $p_dentista_responsavel, DateTime $p_data_orcamento, $p_procedimento, $p_forma_pagamento ) {

    $this->_dentista_responsavel = $p_dentista_responsavel;
    $this->_data_orcamento = $p_data_orcamento;
    $this->_forma_pagamento = array_merge($this->_forma_pagamento, $p_forma_pagamento);
    $this->_procedimento = array_merge($this->_procedimento, $p_procedimento);
    $this->_numero_procedimentos = count($this->_procedimento);
    $this->_calcular_valor_total();
    
  }

  private function _calcular_valor_total() {
    for($i = 0; $i < $this->_numero_procedimentos; $i++) {
      $this->_valor_total += $this->_procedimento[$i]->_valor();
    }
  }
  

  public function set_pagamento($valor) {
      $this->_forma_pagamento = array_merge($this->_forma_pagamento, $valor);
  }

  public function aprovar_orcamento(){
    // falta saber a metodologia que será usada para considerar um apagmento aprovado

    $this->_aprovado = true; 
  }

public function _dentista_responsavel() {
    return $this->_dentista_responsavel;
}

public function _data_orcamento() {
    return $this->_data_orcamento;
}

public function _procedimento() {
    return $this->_procedimento;
}

public function _numero_procedimentos() {
    return $this->_numero_procedimentos;
}

public function _valor_total() {
    return $this->_valor_total;
}

public function _forma_pagamento() {
    return $this->_forma_pagamento;
}

}