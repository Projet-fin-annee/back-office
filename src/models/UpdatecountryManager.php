<?php
class UpdatecountryManager extends Model
{
  public function update_country($country, $title, $text, $image, $video, $id_country)
  {
    $this->updateAll("countries", $country, $title, $text, $image, $video, $id_country);
  }
}
