<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@framework Core 1.1
 *@class Address
 */
class Address
{
  //Company
  //User

  /*protected /*array*/ /*$address;*/
  protected static $address;

  public function __construct()
  {
    static::$address = array(
      "Visiting address",
      "Postal address",
      "Postal no.",
      "Municipality",
      "Postal-region",
      "Mail-address",
      "Workplace",
    );
  }
}
?>
