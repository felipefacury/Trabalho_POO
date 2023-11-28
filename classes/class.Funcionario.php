<?php
require_once __DIR__ . '/../global.php';

  abstract class Funcionario extends Pessoa{

    protected float $_salario;

    public function __construct ($p_nome, $p_email, $p_salario, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                       $p_rua, $p_numero, $p_cpf){
      Parent::__construct($p_nome, $p_email, $p_telefone_de_contato);
      $this->_salario = $p_salario;
      $this->_pais=$p_pais;
      $this->_estado=$p_estado;
      $this->_cidade=$p_cidade;
      $this->_cep=$p_cep;
      $this->_bairro=$p_bairro;
      $this->_rua=$p_rua;
      $this->_numero=$p_numero;
      $this->_cpf=$p_cpf;
    }

    public function salario() {
      return $this->_salario;
    }

    public function set_salario($valor) {
        $this->_salario = $valor;
    }


  }
?>