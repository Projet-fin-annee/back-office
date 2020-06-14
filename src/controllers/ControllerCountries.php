<?php

class ControllerCountries
{
  private $_countryManager;

  public function __construct()
  {

    if($_GET["id"]){

      $this->deleteCountry();
    }else{
      $this->displayCountries();
    }
  }

  public function deleteCountry()
  {

    $this->_countryManager = new CountriesManager;
    $countries = $this->_countryManager->deleteCountry($_GET["id"]);
    $this->displayCountries();
    require_once("./views/viewCountries.php");
  }

  public function displayCountries()
  {
    $this->_countryManager = new CountriesManager;
    $countries = $this->_countryManager->getCountries();

    require_once("./views/viewCountries.php");
  }
}
