<?php

/**
 *@class Positions
 */
class Positions
{
  public /*array*/ $company;

  public /*array*/ $education;

  public function __construct(){
    $this->company = array(
      "Board",
      "Deputy",
      "Chair",
      "President",
      "Director" => array(
      "Deputy Director",
      "Vice-Deputy Director"),
      "Signer",
    );

    $this->eduation = array(
      'Principal',
      'Teacher',
      'Counselor',
    );
  }
}
?>
