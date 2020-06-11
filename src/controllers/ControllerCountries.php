<?php

class ControllerCountries
{
  private $_countryManager;

  public function __construct()
  {
    $this->displayCountries();
  }

  public function displayCountries()
  {

    $this->_countryManager = new CountriesManager;
    $countries = $this->_countryManager->getCountries();

    require_once("./views/viewCountries.php");
  }
}
