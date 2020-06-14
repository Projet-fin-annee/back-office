<?php

class ControllerNewcountry
{

  private $_newcountrymanager;
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 1
    ) {
      throw new Exception("Page introuvable");
    } else {
      require_once("./views/viewNewCountry.php");
    }

    // Check if file already exists
    if (file_exists($target_file_path)) {
      $status = "Sorry, file already exists.";
      $uploadOk = 0;
    }
    var_dump($_FILES[$assetType]["size"]);

    // Check file size
    if ($_FILES[$assetType]["size"] > 65621990) {
      $status = "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" && $imageFileType != "mp3"
    ) {
      $status = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $status = "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES[$assetType]["tmp_name"], $target_file_path)) {
        $status = "The file " . basename($_FILES[$assetType]["name"]) . " has been uploaded.";
      } else {
        $status = "Sorry, there was an error uploading your file.";
      }
    }

    return $target_file;
  }

  public function create_newcountry()
  {
    $image_path = $this->upload_asset("image");
    $video_path = $this->upload_asset("video");

    $country = $_POST['country'];
    $citationOne = $_POST['citationOne'];
    $title = $_POST['title'];
    $citationTwo = $_POST['citationTwo'];
    $imageOne = $image_path;
    $textIntro = $_POST['textIntro'];
    $video = $video_path;
    $citationSpeech = $_POST['citationSpeech'];
    $person = $_POST['person'];
    $imageTwo = $image_path;
    $textOne = $_POST['textOne'];
    $imageThree = $image_path;
    $textTwo = $_POST['textTwo'];
    $this->_newcountrymanager =  new CountriesManager;
    $this->_newcountrymanager->create_country($country, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $video, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo);
  }
}
