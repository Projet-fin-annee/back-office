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
    $citationOne = $_POST['citationOne'];
    $title = $_POST['title'];
    $citationTwo = $_POST['citationTwo'];
    $imageOne = $_POST['imageOne'];
    $textIntro = $_POST['textIntro'];
    $video = $_POST['video'];
    $citationSpeech = $_POST['citationSpeech'];
    $person = $_POST['person'];
    $imageTwo = $_POST['imageTwo'];
    $textOne = $_POST['textOne'];
    $imageThree = $_POST['imageThree'];
    $textTwo = $_POST['textTwo'];
    $this->_newcountrymanager =  new CountriesManager;
    $this->_newcountrymanager->create_country($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo);
  }
}
