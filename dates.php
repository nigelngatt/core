<?php

/**
 *@class Dates
 */
class Dates
{
  protected /*array*/ $dates;

  public function __construct()
  {
    $this->dates = array(
      'Employment date',
      'Education date',
      'Declaration date',
      'Invoice date',
      'Assignment date',
      'Expiration date',
      'Delivery date',
      'Payment date',
    );
  }
}

/**
 *@class Period
 */
class Period
{
  protected /*array*/ $period;

  public function __construct()
  {
    $this->period = array(
      'Employment period',
      'Education period',
    );
  }
}

/**
 * @framework Core 1.1
 * @class Year
 */
class Year
{
  protected /*array*/ $year;
  public function __construct()
  {
    $this->year = array(
      'Revenue',
    );

  }
}

/**
 *@class Times
*/
class Times
{
  protected /*array*/ $times;
  public function __construct()
  {
    $this->times = array(
      'Schedule',
      'Sick',
      'Vacation',
    );

  }
}

?>
