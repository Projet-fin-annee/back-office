<?php
class CountriesManager extends Model
{
  public function create_country($country, $title, $text, $image, $video)
  {

    $this->postOneCountry($country, $title, $text, $image, $video);
    return true;
  }
}
