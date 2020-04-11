<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 * @framework Core 1.1
 * @class Categories
 */
class Categories
{

  public /*array*/ $categories;

  public function __construct(){
    $this->categories = array(
      "Food",
      "Accomodation",
      "Hygiene",
      "Clothing",
      "Electronics",
      "Transportation",
      "Health",
      "Software",
    );
  }
}
?>
