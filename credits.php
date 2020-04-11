<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@class Credits
 */
class Credits
{

  //Finance
  //Accounting

  #protected static credits;
  #protected static rating;
  protected static /*array*/ $credits;

  public function __construct()
  {
    static::$credits = array(
      "Approved",
      "Denied",
      "Ongoing",
      "Closed",
    );
  }
}

?>
