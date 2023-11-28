<?php
require_once __DIR__ . '/../global.php';

class Agendamento {
  
  private Procedimento  $_procedimento;
  private Dentista      $_dentista;
  private Paciente      $_paciente;
  private int           $_contador = 0;
  private               $_consultas = [];
  private bool          $_procedimento_realizado = false;

  public function __construct(Procedimento $procedimento, Dentista $dentista, Paciente $paciente) {
    $this->_procedimento = $procedimento;
    $this->_dentista = $dentista;
    $this->_paciente = $paciente;
    $this->marcar_consulta();
  }

  public function _procedimento_realizado() {
    return $this->_procedimento_realizado;
  }

  public function set_contador($valor) {
    $this->_contador = $valor;
  }

  public function _consultas() {
    return $this->_consultas;
  }

  public function _contador() {
    return $this->_contador;
  }

  public function _procedimento() {
    return $this->_procedimento;
  }

  public function _dentista() {
    return $this->_dentista;
  }

  public function _paciente() {
    return $this->_paciente;
  }

  public function verificar_especialidade() {
    for ($i = 0; $i < count($this->_dentista->_especialidade()->_procedimentos_permitidos()); $i++){
      if($this->_procedimento == $this->_dentista->_especialidade()->_procedimentos_permitidos()[$i]){
        return true;
      }
    }
    return false;
  }

  public function marcar_consulta() {
    for($i = 0; $i < $this->_procedimento->_numero_consultas(); $i++){
      $this->_consultas = array_merge($this->_consultas, [new Consulta($this->_procedimento->_duracao(), new DateTime(), $this)]);
    }
 }

 public function verifica_final(){
  if($this->_contador == $this->_procedimento->_numero_consultas()){
    $this->_procedimento_realizado = true;
  }
}

}
?>