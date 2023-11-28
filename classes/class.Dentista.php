<?php
  require_once __DIR__ . '/../global.php';

  abstract class Dentista extends Pessoa{

    protected string $_cro;
    protected Especialidade $_especialidade;

    public function __construct($p_nome, $p_email, $p_telefone_de_contato, $p_pais, $p_estado, $p_cidade, $p_cep, $p_bairro,                                     $p_rua, $p_numero, $p_cpf, $cro, $especialidade) {
        Parent::__construct($p_nome, $p_email, $p_telefone_de_contato);
        $this->_pais=$p_pais;
        $this->_estado=$p_estado;
        $this->_cidade=$p_cidade;
        $this->_cep=$p_cep;
        $this->_bairro=$p_bairro;
        $this->_rua=$p_rua;
        $this->_numero=$p_numero;
        $this->_cpf=$p_cpf;
        $this->_cro = $cro;
        $this->_especialidade = $especialidade;
    }
    
    public function _cro() {
      return $this->_cro;
    }

    public function _especialidade() {
      return $this->_especialidade;
    }

    public function validar_cro() {
        // Lógica para validar o CRO
    }

    public function alterar_especialidade($novaEspecialidade) {
        $this->_especialidade = $novaEspecialidade;
    }
}