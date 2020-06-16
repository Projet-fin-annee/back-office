<?php

class LoginManager extends Model
{
  public function login_user($email, $password)
  {
    return $this->getOne("users", $email, $password);
  }
}
