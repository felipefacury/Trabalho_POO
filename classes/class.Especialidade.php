<?php
require_once __DIR__ . '/../global.php';

class Especialidade {

    private string $_nome;
    private $_procedimentos_permitidos = [];

    public function __construct($p_nome, $procedimentos_permitidos)
    {
        $this->_nome = $p_nome;
        $this->_procedimentos_permitidos = array_merge($this->_procedimentos_permitidos, $procedimentos_permitidos);
    }

    // public function especialidade_existe($nomeEspecialidade)
    // {
    //     $arquivo = '/home/runner/TestesPOO/Pessoas/classes/especialidades.txt'; // Substituir pelo caminho real do TXT

    //     if (file_exists($arquivo)) {
    //         $especialidades = file($arquivo, FILE_IGNORE_NEW_LINES);

    //         foreach ($especialidades as $especialidade) {
    //             if ($especialidade === $nomeEspecialidade) {
    //                 return true;
    //             }
    //         }

    //         echo "Especialidade inexistente\n";
    //         return false;
    //     } else {
    //         echo "Arquivo não encontrado\n";
    //         return false;
    //     }
    // }

  public function _nome() {
    return $this->_nome;
  }

  public function _procedimentos_permitidos() {
    return $this->_procedimentos_permitidos;
  }
}

