<?php

  require_once __DIR__ . '/../global.php';

  class Dentista_parceiro extends Dentista {

    private float $_percentual;

    public function __construct($p_nome, $p_email, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf, $cro, $especialidade, $percentual) {

        parent::__construct($p_nome, $p_email, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf, $cro, $especialidade);

        $this->_percentual = $percentual;      
    }

    public function alterar_percentual($novoPercentual) {

        $this->_percentual = $novoPercentual;
    }
}
?>