<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 * @framework Core 1.1
 * @class Codes
 */
class Codes
{
  //Accounting
  //Bank
  //Finance
  //Economy
  public /*array*/ $codes;

  public function __construct()
  {
    $this->codes = array(
      "Account-codes" => array(
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
      ),
     "SNI-codes" => array(),
     "Security-code" => array(),
    );
  }

}

?>
