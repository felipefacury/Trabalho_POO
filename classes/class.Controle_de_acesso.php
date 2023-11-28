<?php
 include_once __DIR__ . '/../global.php';

  class Controle_de_acesso{

    private bool    $_logado;
    private Usuario $_usuario;

    public function __construct(Usuario $usuario) {
        $this->_usuario = $usuario;
        $this->_logado = false;
    }

    private function usuario_logado(){
      if (Usuario_Logado::getInstance() != NULL) {
        $this->_logado = true;
        }
    }

    private function verificar_permissao(){
      if (true){

      }elseif (false) {
        //usuario == dentista 
      }elseif (true) {
        //usuario == funcionario
      }else{
        //usuario invalido
      }
    }
    
  }
?>