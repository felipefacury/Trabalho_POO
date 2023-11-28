<?php
require_once __DIR__ . '/../global.php';

class Consulta {

    private DateTime $_data_consulta;
    private int      $_duracao_min;
    private Agendamento $_agendamento;

    public function __construct(int $duracao, DateTime $data, Agendamento $agendamento){
        $this->_data_consulta = $data;
        $this->_duracao_min = $duracao;
        $this->_agendamento = $agendamento;
    }

    public function __destruct() {}

    public function aconteceu() {
        $this->_agendamento->set_contador($this->_agendamento->_contador() + 1);
    }
    
}

?>