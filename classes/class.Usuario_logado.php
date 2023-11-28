<?php

require_once "global.php";

class Usuario_Logado {

    private Usuario|null $logado;

    static private Usuario_Logado|null $ptr = null;

    private function __construct() {

        $logado = null;

    }

    static public function getInstance(){

        if (self::$ptr == null) {

            self::$ptr = new Usuario_Logado();

        }

        return self::$ptr;

    }

    public function logar(Usuario $usuario) {

        $this->logado = $usuario;

    }

    public function deslogar() {

        $this->logado = null;

    }
}
?>