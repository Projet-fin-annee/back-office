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

    $req = $this->getBdd()->prepare("INSERT INTO countries (country,title,text,image,video) VALUES (:country,:title,:text,:image,:video)");
    $data_type = PDO::PARAM_STR;
    $req->bindValue(":country", $country,  $data_type);
    $req->bindValue(":title", $title,  $data_type);
    $req->bindValue(":text", $text, $data_type);
    $req->bindValue(":image", $image,  $data_type);
    $req->bindValue(":video", $video,  $data_type);
    $req->execute();
    return true;
  }


  protected function postOneDefinition($word, $text)
  {
    $req = $this->getBdd()->prepare("INSERT INTO definition (word, text) VALUES (:word,:text)");
    $data_type = PDO::PARAM_STR;
    $req->bindValue(":word", $word,  $data_type);
    $req->bindValue(":text", $text,  $data_type);
    $req->execute();
    return true;
  }
  protected function getOne($table, $email, $password)
  {
    $req = $this->getBdd()->prepare("SELECT email, password FROM $table WHERE email=:email");
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->execute();
    $user = $req->FETCH();

    if (!$user) {
      return false;
    }

    if ($user) {
      $_SESSION["email"] = ":email";
      $_SESSION["password"] = $password;
      $_SESSION["login"] = "OK";
      return true;
    } else {
      return false;
    }
  }
}
