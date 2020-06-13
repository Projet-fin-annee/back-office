<?php

class ControllerUpdatedefinition
{
  private $_updatedefinitionmanager;
  public function __construct($url)
  {
    if (
      isset($url) && count(explode('&', $_SERVER['QUERY_STRING']))
      > 2
    ) {
      throw new Exception("Page introuvable");
    } else {

      $this->update_definitions();

      $id_definition = $_GET['id'];

      require_once("./views/viewUpdateDefinition.php");
    }
  }

  public function update_definitions()
  {
    $id_definition = (int) $_GET['id'];
    $word = $_POST['word'];
    $text = $_POST['text'];
    $this->_updatedefinitionmanager =  new UpdatedefinitionManager;
    $this->_updatedefinitionmanager->update_definition($word, $text, $id_definition);
  }
}
