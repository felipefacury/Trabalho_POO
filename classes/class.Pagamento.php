<?php
require_once __DIR__ . '/../global.php';

class Pagamento {
  protected string $_nome_do_pagamento; 
  protected static float $_imposto;

  public function __construct($nome) {
    $this->_nome_do_pagamento = $nome;
  }

  public function _nome_do_pagamento() {
  return $this->_nome_do_pagamento;
}

public function _imposto() {
  return self::$_imposto;
}

public function set_nome_pagamento($nome) {
    $this->_nome_do_pagamento = $nome;
}

public function alterar_imposto($imposto) {
  self::$_imposto = $imposto;
}
}

?>