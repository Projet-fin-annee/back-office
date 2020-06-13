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

      $this->create_newcountry();
      require_once("./views/viewNewcountry.php");
    }
  }

  public function upload_asset($assetType)
  {
    $target_dir = "uploads/$assetType/";
    var_dump($target_dir);
    $target_file =  strtolower(uniqid() . basename($_FILES[$assetType]["name"])) ;
    $target_file_path = $target_dir . $target_file ;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file_path,PATHINFO_EXTENSION));
    $status;
  
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES[$assetType]["tmp_name"]);
      if($check !== false) {
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
    var_dump($_FILES[$assetType]["size"]);
  
    // Check file size
    if ($_FILES[$assetType]["size"] > 65621990) {
      $status = "Sorry, your file is too large.";
      $uploadOk = 0;
    }
  
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "mp3") {
      $status = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
  
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $status = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES[$assetType]["tmp_name"], $target_file_path)) {
        $status = "The file ". basename( $_FILES[$assetType]["name"]). " has been uploaded.";
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
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $image_path;
    $video = $video_path;
    $this->_newcountrymanager =  new CountriesManager;
    $this->_newcountrymanager->create_country($country, $title, $text, $image, $video);
  }
}
