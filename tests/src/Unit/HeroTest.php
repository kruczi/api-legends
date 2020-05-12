<?php

namespace Drupal\Tests\apigee_edge\Unit;

use Drupal\api_legends\Hero;
use Drupal\Tests\UnitTestCase;


/**
 * Hero tests.
 *
 * @group api_legends
 */
class HeroTest extends UnitTestCase {

  public function providerGetHero() {
    $hero = new Hero();

    return $hero;
  }

  /**
   *
   */
  public function testHeroPassStrengthValue() {
    $hero = new Hero();
    // The new object od class Hero should have value zero.
    $this->assertEquals(0, $hero->getStrength());
    $hero->setStrength(55);
    $this->assertEquals(55, $hero->getStrength());
  }

  /**
   * @expectedException \Exception
   */
  public function testHeroPassStrengthInvalidValue() {
    $hero = new Hero();
    $hero->setStrength('invalid value');
  }

  /**
   *
   */
  public function testHeroPassHealthValue() {
    $hero = new Hero();
    // The new object od class Hero should have value zero.
    $this->assertEquals(0, $hero->getHealth());
    $hero->setHealth(55);
    $this->assertEquals(55, $hero->getHealth());
  }

  /**
   * @expectedException \Exception
   */
  public function testHeroPassHealthInvalidValue() {
    $hero = new Hero();
    $hero->setHealth('invalid value');
  }
}
