<?php
/**
* @ © Copyright MIT License / No copying
* @ Author Nigel Gatsfield
* @ ® Version 1.0
*/

/**
 * @class Numbers
 */
class Numbers
{
  protected /*array*/ $numbers;

  public function __construct()
  {
    $this->numbers = array(
      "Dob",
      "Grade",
      "ID" =>
	array(
	 "Student",
	),
      "Employment-no.",
      "Organization-no.",
      "VAT-no.",
      "Verification-no",
      "Bank" => array(
        "Plusgiro",
        "Bankgiro",
        "IBAN",),
      "SKU",
      "Invoice" =>
       array(
	"No.",
	"OCR"
       ),
      "Company" =>
	array(
	 "Size"
	),
       );
  }
}
?>
