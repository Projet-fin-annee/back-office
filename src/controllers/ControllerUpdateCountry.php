<?php

class ControllerUpdatecountry
{
  private $_updatecountrymanager;
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 2
    ) {
      throw new Exception("Page introuvable");
    } else {

      $this->update_countries();
      $id_country = $_GET['id'];

      require_once("src/./views/viewUpdateCountry.php");
    }
  }

  public function update_countries()
  {
    $id_country = (int) $_GET['id'];
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

    $this->_updatecountrymanager =  new UpdatecountryManager;
    $this->_updatecountrymanager->update_country($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $id_country);
  }
}
