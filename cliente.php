<?php

include_once 'persona.php';

class Cliente extends Persona{

  public $indirizzoSpedizione;
  public $metodoDiPagamento;
  public $email;

  public function __construct($_nome, $_cognome, $_indirizzoSpedizione, $_metodoDiPagamento, $_email) {

    parent::__construct($_nome, $_cognome, $_dataDiNascita = null);

    $this->indirizzoSpedizione = $_indirizzoSpedizione;
    $this->metodoDiPagamento = $_metodoDiPagamento;
    $this->email = $_email;

  }

}


?>
