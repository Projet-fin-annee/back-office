<?php

class ControllerNewcountry
{

  private $_newcountrymanager;
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 1
    ) {
      throw new Exception("Page introuvable");
    }  else{
      require_once("./views/viewNewCountry.php");

    }
  }
}
