<?php
class CountriesManager extends Model
{
  public function create_country($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo)
  {
    $this->postOneCountry($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo);
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
