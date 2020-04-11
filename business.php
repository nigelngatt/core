<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@framework Core 1.1
 *@class Business
 */
class Business
{
  public static /*array*/ $business;
  public static /*array*/ $types;

  public function __construct()
  {
    static::$business = array(
      'Services',
    );
    static::$types = array();
  }
}

?>
