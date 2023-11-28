<?php
require_once __DIR__ . '/../global.php';

class Debito extends Cartao {
  private static float $_taxa;

  public function __construct(string $nome_pagamento, string $nome, string $numero, DateTime $vencimento_cartao, int $cvv, float $taxa) {
    parent::__construct($nome_pagamento, $nome, $numero, $vencimento_cartao, $cvv);
    self::$_taxa = $taxa;
  }

  public function set_taxa($taxa) {
    self::$_taxa = $taxa;
  }

  public function _taxa() {
    return self::$_taxa;
  }
}
?>