<?php
class UpdatecountryManager extends Model
{
  public function update_country($country, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $id_country)
  {
    $this->updateAllcountries("countries", $country, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $id_country);
  }
}
