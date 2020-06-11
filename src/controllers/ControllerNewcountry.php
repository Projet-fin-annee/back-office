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
    } else {

      $this->create_newcountry();
      require_once("./views/viewNewcountry.php");
    }
  }


  public function create_newcountry()
  {
    $country = $_POST['country'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $video = $_POST['video'];
    $this->_newcountrymanager =  new CountriesManager;
    $this->_newcountrymanager->create_country($country, $title, $text, $image, $video);
  }
}
