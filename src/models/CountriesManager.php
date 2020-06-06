<?php
class CountriesManager extends Model
{
  public function create_country($country, $title)
  {
    $this->postOne($country, $title);
  }
}
