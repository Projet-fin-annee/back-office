<?php
class CountriesManager extends Model
{
  public function create_country($country, $title, $text, $image, $video)
  {
    $this->postOne($country, $title, $text, $image, $video);
  }
}
