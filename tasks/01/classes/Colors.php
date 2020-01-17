<?php

namespace classes;

use classes\Parser\Parser;


class Colors
{


  private $strategy = null;


  function __construct(Parser $strategy)
  {
    $this->setStrategy($strategy);
  }


  public function setStrategy(Parser $strategy)
  {
    $this->strategy = $strategy;
  }


  public function get(): array
  {
    $colorsData = $this->strategy->parse();
    $colorsData = $this->handleColorsData($colorsData);
    return $colorsData;
  }


  private function handleColorsData(array $colorsData): array
  {

    return $colorsData;
  }


}