<?php

namespace Drupal\api_legends;

use function GuzzleHttp\Psr7\str;

class Hero {

  private $type;

  private $strength = 0;

  private $health = 0;

  /**
   * @return mixed
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param mixed $type
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * @return int
   */
  public function getStrength() {
    return $this->strength;
  }

  /**
   * @param int $strength
   *
   * @throws \Exception
   */
  public function setStrength($strength) {
    if (!is_numeric($strength)) {
      throw new \Exception('Strength must be a number.');
    }

    $this->strength = $strength;
  }

  /**
   * @return int
   */
  public function getHealth() {
    return $this->health;
  }

  /**
   * @param int $health
   */
  public function setHealth($health) {
    if (!is_numeric($health)) {
      throw new \Exception('Strength must be a number.');
    }

    $this->health = $health;
  }

}