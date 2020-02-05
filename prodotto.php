<?php
include_once 'posizioneProdotto.php';

class Prodotto extends posizioneProdotto{

  public $nome;
  public $id;
  public $disponibilità;
  public $prezzo;

  function __construct($_settore, $_posizione, $_nome, $_id, $_disponibilità, $_prezzo){

    parent::__construct($_settore, $_posizione);

    $this->nome = $_nome;
    $this->id = $_id;
    $this->disponibilità = $_disponibilità;
    $this->prezzo = $_prezzo;

  }
}


?>
