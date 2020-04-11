
<?php
/**
* @PHP Version 7.2.1
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*/

/**
 * @class Amounts
 * @array
 */
class Amounts
{
  protected /*array*/ $amounts;

  function __construct()
  {
    $this->amounts = array(
      "Tuition",
      "Invoice",
      "Amounts",
      "VAT",
      "Interest",
      "Taxes",
      "Revenue",
      "Sales",
      "Salary",
      "Loan",
    );
  }
}

?>
