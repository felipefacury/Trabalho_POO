<?php
require_once __DIR__ . '/../global.php';

class Consulta_de_avaliacao {

 private Paciente $_paciente;
 private DateTime $_data_consulta;
 private Dentista $_dentista_avaliador; 
 private static int $_duracao_prevista = 30;

 public function __construct(Paciente $paciente, DateTime $data_consulta,Dentista $dentista){
    $this->_paciente = $paciente;
    $this->_data_consulta = $data_consulta;
    $this->_dentista_avaliador = $dentista;
 }

}
?>