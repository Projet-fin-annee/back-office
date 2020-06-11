<?php

class ControllerLogin
{
  private $_loginManager;

  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 1
    ) {
      throw new Exception("Page introuvable");
    } else {
      $this->checkForm();
    }
  }
  public function checkForm()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (empty($_POST['email'])) {
        $emailErr = "Le mail n'est pas rempli";
      } else {

        $email =  $_POST['email'];
      }
      if (empty($_POST['password'])) {
        $passwordErr = "Le mot de passe n'est pas rempli";
      } else {
        $password =  $_POST['password'];
      }
    }

    if (isset($email) && !isset($emailErr) && isset($password) && !isset($passwordErr)) {
      $this->login();
    } else {
      require_once("views/viewLogin.php");
    }
  }
  public function login()
  {


    $this->_loginManager = new LoginManager;

    $login = $this->_loginManager->login_user($_POST['email'], $_POST['password']);
    if (!$login) {
      require_once("views/viewLogin.php");
      throw new Exception("Email or Password Incorrect");
    }

    require_once("views/viewHomepage.php");
  }
}
