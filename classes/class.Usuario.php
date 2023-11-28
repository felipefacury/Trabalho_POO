<?php
 include_once __DIR__ . '/../global.php';
  class Usuario{
    protected string $_email;
    protected string $_senha;
    protected string $_login;
    protected Perfil $_perfil;
    //Construindo um construtor para testes 
    public function __construct($p_email,$p_senha,$p_login, $p_perfil ) {

      $this->_email = $p_email;
      $this->_senha = $p_senha;
      $this->_login = $p_login;
      $this->_perfil = $p_perfil;

    }

    public function email(){
      return $this->_email;
    }
    public function senha(){
      return $this->_senha;
    }
    public function login(){
      return $this->_login;

    }
    public function perfil(){
      return $this->_perfil;

    }

  }
?>