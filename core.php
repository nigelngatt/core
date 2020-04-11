<?php
/*
 *@Version 1.1
 *@Date 21:59 2018-11-07 UTC-Spain
 *@Author/Developer Nigel Gatsfield �
 *@Url https://ape.tax
 *@PHP Version 7.2.1
 *@Url https://php.net
*/

/*
*@class Core
*/

include 'categories\category.php';
include 'helper\finder.php';
#include 'generate\gene.php';
include 'address.php';
include 'amounts.php';
include 'assets.php';
include 'bank.php';
include 'business.php';
include 'categories.php';
include 'codes.php';
include 'company.php';
include 'contact.php';
include 'credits.php';
include 'dates.php';
include 'documents.php';
include 'experience.php';
include 'fees.php';
include 'names.php';
include 'numbers.php';
include 'payments.php';
include 'positions.php';
include 'revenue.php';
include 'transactions.php';
include 'terms.php';

class Core{

var $core;

public function type():float{
  define('__CORE__', 'C:\Users\Nigel\PHPServer\rt\core');
  //Update to other framework - $dir = $a(scandir(_ROOT_));
  $recurse = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__CORE__));
  foreach ($recurse as $directory => $file) {
    $file = $file->getFileName();
    if($file != '.'){
    if($file != '..'){
    if($file != '.php'){
      $reflection = (new ReflectionClass(basename(str_replace('.php', '', ucfirst($file))));
      var_dump($reflection, $recurse, $directory, $file); //uncomment for debugging
      printf("Properties found: %s, Reflection classes found: %s, Directories found from Iterators: %s, Files found from Iterator: %s, Location searched in: %s", $properties, $reflection, $directory, $file, __CORE__);
      //uncomment for debugging
      #$_reflection = $reflection->getName();
      foreach($reflection->getProperties() as $properties){
        if (
            $properties->isProtected() ||
            $properties->isPrivate()
           ) {
             $properties->setAccessible(true);
             }

        printf(
              "Properties found: %s\n, Values: %s\n",
              $properties->getName(), $properties->getValue(new $_reflection)
              );

        if(
            $reflection->getName() === $properties->getName()  ||
            $reflection->getName() === $properties->getValue(new $reflection->getName())
          ) return function(){
              return $this->core = array($properties->getName(), $properties->getValue(new $reflection->getName()));
            /*return $this->core = $this->t_(new Gene);*/
          };
        else exit('Wrong');
        //$properties ||
        /*if($dir === __FILE__){*/
        #stripos($properties->getName(), substr($properties->getName(), 0, strlen($properties->getName()))) ||
        #stripos($properties->getValue(), substr($properties->getValue(), 0, strlen($properties->getValue())))
      }
    }
  }
}
}
}
//}

private static function t_() : array{
  $r = (new ReflectionClass('Core'));/*('core/'Added in latest update (2019-03-04)$r->getFileName()));*/
  $r = $r->getMethod('type');
  $r->setAccessible(true);
  while($r->getReturnType() === float){
   foreach (($property = $r->getProperties(ReflectionProperty::IS_PROTECTED)) as $properties){
    if((new Pattern3)->Patterns('~(?<='.'('.$var.')'.'~', $p->Core($properties), $$m) ){
     return ($G=new Gene)::f();
   } else return (new Pattern)::Searcher($c);
   }
 }

}
#$reflection = (new ReflectionClass('Core'));
#$reflection = $reflection->getMethod('type');
#$reflection->setAccessible(true);
#var_dump($reflection);
#(new Core)->type();
#$helper = new Helper();
#var_dump((new ReflectionClass($helper->Finder2('C:\Users\Nigel'))));
#var_dump((new ReflectionClass('Helper'))->getMethods());
?>
