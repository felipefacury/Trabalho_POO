<?php  

require_once __DIR__ . '/../global.php';

abstract class Pessoa{    
        protected string $_nome_completo;
        protected string $_email;
        protected string $_telefone_de_contato;
        protected string $_pais;
        protected string $_estado;
        protected string $_cidade;
        protected string $_cep;
        protected string $_bairro;
        protected string $_rua;
        protected string $_numero;
        protected string $_cpf;
        protected string $_rg;


    public function __construct($p_nome, $p_email, $p_telefone) {
        $this->_nome_completo = $p_nome;
        $this->_email=$p_email;
        $this->_telefone_de_contato=$p_telefone;
        // deixar só atributos comuns no construtor
        // $this->_pais=$p_pais;
        // $this->_estado=$p_estado;
        // $this->_cidade=$p_cidade;
        // $this->_cep=$p_cep;
        // $this->_bairro=$p_bairro;
        // $this->_rus=$p_rua;
        // $this->_numero=$p_numero;
        // $this->_cpf=$p_cpf;
        // $this->_rg=$p_rg;
    }

     public function set($atributo, $valor) {
         $this->$atributo = $valor;
     }

    public function _nome_completo() {
        return $this->_nome_completo;
    }

    public function _email() {
        return $this->_email;
    }
    
    public function _telefone_de_contato() {
            return $this->_telefone_de_contato;
        }
    
    public function _pais() {
            return $this->_pais;
        }
    
    public function _estado() {
            return $this->_estado;
        }
    
    public function _cidade() {
            return $this->_cidade;
        }
    
    public function _cep() {
            return $this->_cep;
        }
    
    public function _bairro() {
            return $this->_bairro;
        }
    
    public function _rua() {
            return $this->_rua;
        }
    
    public function _numero() {
            return $this->_numero;
        }
    
    public function _cpf() {
            return $this->_cpf;
        }
  
    public function _rg() {
        return $this->_rg;
    }

    public function validar_email(){
        $email = $this->_email;
        $email = trim($email); 
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
        } else {
                return false;
        }
    }

    public function validar_telefone(){
        $telefone = $this->_telefone_de_contato;
        $telefone_inteiros = preg_replace("/[^0-9]/", "", $telefone);
        $tamanho_telefone = strlen($telefone_inteiros);
        if ($tamanho_telefone > 10 && $tamanho_telefone < 14){
            return true;
        }else{
            return false; 
        }
    }

    public function validar_cep(){
        $cep = $this->_cep;
        $cep = preg_replace('/[^0-9]/', '', $cep);
        if (strlen($cep) === 8){
            return true;
        }else {
            return false;
        }
    }

    public function validar_cpf(){
        $cpf = $this->_cpf;
      
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
                return false;
        }

        for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                        return false;
                }
        }
        return true;
    }


}