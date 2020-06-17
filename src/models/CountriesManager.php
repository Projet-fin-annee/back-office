<?php
class CountriesManager extends Model
{
  public function create_country($country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video)
  {
    $this->postOneCountry($country,  $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video);
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
