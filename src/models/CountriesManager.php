<?php
class CountriesManager extends Model
{
  public function create_country($country, $title, $text, $image, $video)
  {
    $this->postOneCountry($country, $title, $text, $image, $video);
  }

  public function getCountries()
  {
    return $this->getAll("countries");
  }

  public function deleteCountry($countryId)
  {
    return $this->deleteOneCountry("countries", $countryId);
  }
}
