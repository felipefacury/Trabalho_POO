<?php
require_once __DIR__ . '/../global.php';

  class Secretaria extends Funcionario{
    
    public function __construct ($p_nome, $p_email, $p_salario, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf){

      Parent::__construct($p_nome, $p_email, $p_salario, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf);

    }
    
  }
?>