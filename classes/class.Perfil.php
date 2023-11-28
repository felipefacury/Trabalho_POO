<?php

include_once __DIR__ . '/../global.php';

abstract class Perfil {

  private string $_nome;
  private        $_permissoes = [];

  public function __construct(string $nome, $permissoes) {
    $this->_nome = $nome;
    $this->_permissoes = $permissoes;
  }
  
}