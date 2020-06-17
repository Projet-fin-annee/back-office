<?php

abstract class Model
{
  private static $_bdd;

  private static function setBdd()
  {
    //online bdd conexion
    // self::$_bdd = new PDO('mysql:host=custom-x5lq.mysql.eu2.frbit.com; dbname=custom-x5lq;charset=utf8', 'custom-x5lq', 'I8SIS0.rKUSCWdRH8kQ7HWCq');
    //local bdd connexion
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

  protected function postOneCountry($country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video)
  {
    $req = $this->getBdd()->prepare("INSERT INTO countries (country,imageBackground,htag,victimsName,citationOne,title,citationTwo,imageOne,textIntro,titleSpeech,audio,citationSpeech,person,imageTwo,textOne,imageThree,textTwo,video) VALUES (:country,:imageBackground,:htag,:victimsName,:citationOne,:title,:citationTwo,:imageOne,:textIntro,:titleSpeech,:audio,:citationSpeech,:person,:imageTwo,:textOne,:imageThree,:textTwo,:video)");

    $data_type = PDO::PARAM_STR;
    $req->bindValue(":country", $country,  $data_type);
    $req->bindValue(":imageBackground", $imageBackground,  $data_type);
    $req->bindValue(":htag", $htag,  $data_type);
    $req->bindValue(":victimsName", $victimsName,  $data_type);
    $req->bindValue(":citationOne", $citationOne,  $data_type);
    $req->bindValue(":title", $title, $data_type);
    $req->bindValue(":citationTwo", $citationTwo,  $data_type);
    $req->bindValue(":imageOne", $imageOne,  $data_type);
    $req->bindValue(":textIntro", $textIntro,  $data_type);
    $req->bindValue(":titleSpeech", $titleSpeech,  $data_type);
    $req->bindValue(":audio", $audio,  $data_type);
    $req->bindValue(":citationSpeech", $citationSpeech,  $data_type);
    $req->bindValue(":person", $person,  $data_type);
    $req->bindValue(":imageTwo", $imageTwo,  $data_type);
    $req->bindValue(":textOne", $textOne,  $data_type);
    $req->bindValue(":imageThree", $imageThree,  $data_type);
    $req->bindValue(":textTwo", $textTwo,  $data_type);
    $req->bindValue(":video", $video,  $data_type);
    $req->execute();

    return true;
  }

  protected function deleteOneCountry($table, $countryId)
  {
    $req = $this->getBdd()->prepare("DELETE FROM $table WHERE  id = $countryId");
    $req->execute();

    return true;
  }

  protected function deleteOneDefinition($table, $definitionId)
  {
    $req = $this->getBdd()->prepare("DELETE FROM $table WHERE  id = $definitionId");
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

  protected function getAll($table)
  {
    $req = $this->getBdd()->prepare("SELECT * FROM $table");
    $req->execute();
    $var = $req->fetchAll(PDO::FETCH_ASSOC);

    return $var;
  }

  protected function getOneCountry($table, $id_country)
  {
    $req = $this->getBdd()->prepare("SELECT * FROM $table WHERE id=$id_country");
    $req->execute();
    $country = $req->fetch(PDO::FETCH_ASSOC);
    return $country;
  }

  protected function updateOnecountries($table, $country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video, $id_country)
  {

    $req = $this->getBdd()->prepare("UPDATE $table SET country='$country',imageBackground='$imageBackground',htag='$htag',victimsName='$victimsName', citationOne='$citationOne', title='$title', citationTwo='$citationTwo', imageOne='$imageOne',textIntro='$textIntro',titleSpeech='$titleSpeech',audio='$audio',citationSpeech='$citationSpeech',person='$person', imageTwo='$imageTwo',textOne='$textOne',imageThree='$imageThree',textTwo='$textTwo',video='$video' WHERE id=$id_country");
    $req->execute();

    return true;
  }

  protected function updateAlldefinitions($table, $word, $text, $id_definition)
  {
    $req = $this->getBdd()->prepare("UPDATE $table SET word='$word', text='$text' WHERE id=$id_definition");
    $req->execute();


    return true;
  }
}
