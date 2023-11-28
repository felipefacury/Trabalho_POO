<?php
require_once __DIR__ . '/../global.php';

class Credito extends Cartao {
private int $_max_parcelas;

private static $_taxa = [];

public function __construct(string $nome_pagamento, string $nome, string $numero, DateTime $vencimento_cartao, int $cvv,
                            int $max_parcelas) {
  parent::__construct($nome_pagamento, $nome, $numero, $vencimento_cartao, $cvv);
  $this->_max_parcelas = $max_parcelas;
}

public function set_taxas(int $inicio, int $fim, array $taxa) {
  for ($i = $inicio; $i <= $fim; $i++) {
      $this->_taxa[$i - 1] = $taxa[$i - 1];
  }
}

public function set_taxa(int $parcela, float $taxa) {
  $this->_taxa[$parcela-1] = $taxa;
}

public function _taxa() {
  return $this->_taxa;
}

  public function _max_parcelas() {
    return $this->_max_parcelas;
  }
}
?>