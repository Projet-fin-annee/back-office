<?php
class UpdatecountryManager extends Model
{
  public function update_country($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $id_country)
  {
    $this->updateAllcountries("countries", $country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $id_country);
  }
}
