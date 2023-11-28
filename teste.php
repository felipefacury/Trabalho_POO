<?php

require_once 'global.php';

//-----------------------------------------------------------------------------
$fusoHorario = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fusoHorario);

//-----------------------------------------------------------------------------
$paciente = new Paciente("Felipe", "abc@hotmail.com", "3446-4235", "12345647");

//-------------------------------------------------------------------------------
$procedimento1 = new Procedimento("Limpeza", "limpeza geral", 150.00, 3, 40);
$procedimento2 = new Procedimento("Extração", "extração de um dente", 200.00, 2, 100);
$procedimento3 = $procedimento2;
$procedimento4 = $procedimento1;

//-------------------------------------------------------------------------------
$especialidade = new Especialidade("Geral", [$procedimento1, $procedimento2]);

//-------------------------------------------------------------------------------
$dentista = new Dentista_funcionario("Marcos", "mc@hotmail.com", "928970298", "Brasil", "MG", "Araguari", "12123-123", "são lucas", "Dois", "123", "23456785414", "2945920224", $especialidade, 3000.00);

//-------------------------------------------------------------------------------
$pagamento = new Pagamento("PIX");
$pagamento2 = new Pagamento("Dinheiro");

//-------------------------------------------------------------------------------
$orcamento = new Orcamento($dentista, $data, [$procedimento3, $procedimento4], [$pagamento, $pagamento2]);

//-------------------------------------------------------------------------------
$agendamento = new Agendamento($procedimento3, $dentista, $paciente);

//---------------------------------------------------------------------------TESTES
echo var_dump($agendamento->_consultas()) . "\n";

?> 