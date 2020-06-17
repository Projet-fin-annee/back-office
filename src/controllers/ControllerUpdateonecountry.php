<?php

class ControllerUpdateonecountry
{
  private $_updatecountrymanager;
  public function __construct($url)
  {
    require_once('models/UpdatecountryManager.php');
    require_once('models/CountriesManager.php');
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 3
    ) {
      throw new Exception("Page introuvable");
    } else if ($_GET["action"]) {
      $this->update_countries();
      $this->displayCountries("update");
      require_once("views/viewCountries.php");
    } else {
      $id_country = $_GET['id'];
      $this->_updatecountrymanager =  new UpdatecountryManager;
      $country = $this->_updatecountrymanager->getCountry($id_country);

      require_once("views/viewUpdateCountry.php");
    }
  }
  public function displayCountries($action)
  {
    $this->_countryManager = new CountriesManager;
    $countries = $this->_countryManager->getCountries();
    if ($action == "update") {
      $actionTitle = "Le pays à bien était modifié dans la liste.";
    } else {
      $actionTitle = null;
    }
    require_once("views/viewCountries.php");
  }
  public static function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('/\s+/', '-', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
  public function upload_asset($assetType, $assetName)
  {
    $target_dir = "uploads/$assetType/";
    $target_file =  $this->slugify(uniqid() . basename($_FILES[$assetName]["name"]));
    $target_file_path = $target_dir . $target_file;
    $uploadOk = 1;
    $assetFileType = strtolower(pathinfo($target_file_path, PATHINFO_EXTENSION));
    $status;

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES[$assetName]["tmp_name"]);
      if ($check !== false) {
        $status = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        $status = "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file_path)) {
      $status = "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES[$assetName]["size"] > 65621990) {
      $status = "Sorry, your file is too large.";
      $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $status = "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES[$assetName]["tmp_name"], $target_file_path)) {
        $status = "The file " . basename($_FILES[$assetName]["name"]) . " has been uploaded.";
      } else {
        $status = "Sorry, there was an error uploading your file.";
      }
    }
    return $target_file;
  }
  public function update_countries()
  {
    $id_country = (int) $_GET['id'];

    $image_path_1 = $this->upload_asset("image", "imageOne");
    $image_path_principal = $this->upload_asset("image", "imageBackground");
    $image_path_2 = $this->upload_asset("image", "imageTwo");
    $image_path_3 = $this->upload_asset("image", "imageThree");
    $audio_path = $this->upload_asset("video", "audio");
    $video_path = $this->upload_asset("video", "video");

    $country = $_POST['country'];
    $imageBackground = $image_path_principal;
    $htag = $_POST['htag'];
    $victimsName = $_POST['victimsName'];
    $citationOne = $_POST['citationOne'];
    $title = $_POST['title'];
    $citationTwo = $_POST['citationTwo'];
    $imageOne = $image_path_1;
    $textIntro = $_POST['textIntro'];
    $titleSpeech = $_POST['titleSpeech'];
    $audio = $audio_path;
    $citationSpeech = $_POST['citationSpeech'];
    $person = $_POST['person'];
    $imageTwo = $image_path_2;
    $textOne = $_POST['textOne'];
    $imageThree = $image_path_3;
    $textTwo = $_POST['textTwo'];
    $video = $video_path;
    $this->_updatecountrymanager =  new UpdatecountryManager;
    $this->_updatecountrymanager->update_country($country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video, $id_country);
  }
}
