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

  protected function getOne($table, $email, $password)
  {
    $req = $this->getBdd()->prepare("SELECT email, password FROM $table WHERE email='$email'");
    $req->execute();
  }


  protected function postOne($country, $title, $text, $image, $video)
  {

    $req = $this->getBdd()->prepare("INSERT INTO countries (country,title,text,image,video) VALUES ('$country','$title','$text','$image','$video' )");
    $req->execute();
    return true;
  }
}
