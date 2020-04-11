<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@class Assets
 */
class Assets
{
  //Taxes
  //Accounting
  //Users
  protected /*array*/ $assets;

  public function __construct()
  {
    $this->assets = array(

      "Material" => array(

       "Anläggningar",
       "Tekniska anläggningar",
       "Vehicle",
       "Equipment",
       "Program",
       "Real estate",
     ),
      "Immaterial" => array(
       "Värdepapper",
       "Stocks",
       "Trademarks",
     )
    );
  }
}
?>
