<?php

class ControllerNewcountry
{
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 1
    ) {
      throw new Exception("Page introuvable");
    } else {
      require_once("src/./views/viewNewCountry.php");
    }
  }
}
