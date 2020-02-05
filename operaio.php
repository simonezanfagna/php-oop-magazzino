<?php

include_once 'persona.php';

class Operaio extends Persona{

  public $matricola;
  public $mansione;

  public function __construct($_nome, $_cognome, $_matricola, $_mansione){

    parent::__construct($_nome, $_cognome, $_dataDiNascita = null);

    $this->matricola = $_matricola;
    $this->mansione = $_mansione;
  }

}


?>
