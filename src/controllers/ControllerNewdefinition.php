<?php

class ControllerNewdefinition
{

  private $_newdefinitionmanager;
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 1
    ) {
      throw new Exception("Page introuvable");
    } else {

      $this->create_newdefinition();
      require_once("./views/viewNewdefinition.php");
    }
  }


  public function create_newdefinition()
  {
    $word = $_POST['word'];
    $text = $_POST['text'];

    $this->_newdefinitionmanager =  new DefinitionManager;
    $this->_newdefinitionmanager->create_definition($word, $text);
  }
}
