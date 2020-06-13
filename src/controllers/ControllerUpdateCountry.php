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

      require_once("./views/viewUpdatecountry.php");
    }
  }

  public function update_countries()
  {
    $id_country = (int) $_GET['id'];

    $country = $_POST['country'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $video = $_POST['video'];
    $this->_updatecountrymanager =  new UpdatecountryManager;
    $this->_updatecountrymanager->update_country($country, $title, $text, $image, $video, $id_country);
  }
}
