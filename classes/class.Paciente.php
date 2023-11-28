<?php
require_once __DIR__ . '/../global.php';


class Paciente extends Pessoa{

  private Orcamento $_orcamento;

  public function __construct(string $nome, string $email, string $telefone, string $rg){
      parent:: __construct($nome, $email, $telefone);
      $this->_rg = $rg;
  }

  public function _rg() {
    return $this->_rg;
  }

  public function criar_orcamento(Orcamento $orcamento){
    $this->_orcamento = $orcamento;
  }

  public function aprovar_orcamento(){
    $this->_orcamento->aprovar_orcamento();
  }
}

?>