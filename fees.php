<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@class Fees
 */
class Fees
{
  protected static/*array*/ $fees;

  public function __construct()
  {
    static::$fees = array(
      "Penalty fee",
      "Interest fee",
      "Collection fee",
      "Tax fee",
      "Employer fee",
      "Education fee",
      "VAT fee",
    );
  }
}
?>
