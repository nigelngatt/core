<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
*
*/

/**
 *@class Company
*/
class Company
{

  public /*array*/ $company_types;
  public $registrations;

  public function __construct(){
    $this->company_types = array(
      "For-Profit",
      "Non-profit",
      "Residential",
      "Societal",
      "Charity",
      "Trust",
      "Limited Liability Company",
      "Trading company",
      "Kommandit? company",
      "Overseas",
      "Public",
      "Private",
      "Governmental",
      "Group",
      "Corporation",
    );
    $this->registrations = array(
      "F-Tax",
      "FA-Tax",
      "VAT",
      "Employer",
      "Accounting-principle",
    );
  }
}
?>
