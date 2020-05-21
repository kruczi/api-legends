<?php

namespace Drupal\api_legends\Service;

use Drupal\api_legends\Model\Hero;

class HeroLoader {

  /**
   * @return Hero[]
   */
  public function getHeroes() {
    $heroes = [];
    $heroes[] = new Hero('dwarf');
    $heroes[] = new Hero('elf');
    $heroes[] = new Hero('human');

    return $heroes;
  }

}