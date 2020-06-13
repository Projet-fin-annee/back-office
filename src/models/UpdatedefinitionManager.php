<?php
class UpdatedefinitionManager extends Model
{
  public function update_definition($word, $text, $id_definition)
  {
    $this->updateAlldefinitions("definition", $word, $text, $id_definition);
  }
}
