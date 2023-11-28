<?php
  require_once __DIR__ . '/../global.php';

  class Dentista_funcionario extends Dentista {

    private float $_salario;

    public function __construct($p_nome, $p_email, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf, $cro, $especialidade, $salario) {

        parent::__construct($p_nome, $p_email, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf, $cro, $especialidade);
        $this->_salario = $salario;
    }

    public function _salario() {
      return $this->_salario;
    }

    public function alterar_salario($novoSalario) {

        $this->_salario = $novoSalario;
    }
}
?>