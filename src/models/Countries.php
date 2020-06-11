<?php
class Country
{
  private $_countryname;

  public function __construct(array $data)
  {
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);

      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function setCountryname($countryname)
  {
    if (is_string($countryname)) {
      $this->_countryname = $countryname;
    }
  }

  public function countryname()
  {
    return $this->_countryname;
  }
}
