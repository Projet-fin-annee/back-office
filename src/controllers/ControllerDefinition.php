<?php

class ControllerDefinition
{
  private $_definitionManager;

  public function __construct()
  {

    if ($_GET["id"]) {

      $this->deleteDefinition();
    } else {
      $this->displayDefinitions();
    }
  }

  public function deleteDefinition()
  {

    $this->_definitionManager = new DefinitionManager;
    $definitions = $this->_definitionManager->deleteDefinition($_GET["id"]);
    $this->displayDefinitions();
    require_once("src/./views/viewDefinition.php");
  }

  public function displayDefinitions()
  {
    $this->_definitionManager = new DefinitionManager;
    $definitions = $this->_definitionManager->getDefinition();

    require_once("src/./views/viewDefinition.php");
  }
}
