<?php
class DefinitionManager extends Model
{
  public function create_definition($word, $text)
  {
    $this->postOneDefinition($word, $text);
  }
  public function getDefinition()
  {
    return $this->getAll("definition");
  }

  public function deleteDefinition($definitionId)
  {
    return $this->deleteOneDefinition("definition", $definitionId);
  }
}
