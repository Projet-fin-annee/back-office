<?php
class DefinitionManager extends Model
{
  public function create_definition($word, $text)
  {
    $this->postOneDefinition($word, $text);
  }
}
