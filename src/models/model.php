<?php

abstract class Model
{
  private static $_bdd;

  private static function setBdd()
  {
    self::$_bdd = new PDO('mysql:host=localhost; dbname=webdoc;charset=utf8', 'root2');
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }

  protected function getBdd()
  {
    if (self::$_bdd == null) {
      self::setBdd();
    }
    return self::$_bdd;
  }

  protected function postOneCountry($country, $title, $text, $image, $video)
  {

    $req = $this->getBdd()->prepare("INSERT INTO countries (country,title,text,image,video) VALUES ('$country','$title','$text','$image','$video' )");
    $req->execute();
    return true;
  }


  protected function postOneDefinition($word, $text)
  {
    $req = $this->getBdd()->prepare("INSERT INTO definition (word, text) VALUES ('$word','$text')");
    $req->execute();
    return true;
  }
  protected function getOne($table, $email, $password)
  {
    $req = $this->getBdd()->prepare("SELECT email, password FROM $table WHERE email='$email'");
    $req->execute();
    $user = $req->FETCH();

    if (!$user) {
      return false;
    }

    if ($user) {
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      $_SESSION["login"] = "OK";
      return true;
    } else {
      return false;
    }
  }
}
