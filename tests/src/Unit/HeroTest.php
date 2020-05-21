<?php

namespace Drupal\api_legends\Tests\Unit;

use Drupal\api_legends\Model\Hero;
use Drupal\Tests\UnitTestCase;


/**
 * Hero tests.
 *
 * @group api_legends
 */
class HeroTest extends UnitTestCase {

  public function providerGetHero() {
    $hero = new Hero('elf');

    return $hero;
  }

  /**
   *
   */
  public function testHeroPassStrengthValue() {
    $hero = new Hero('dwarf');
    // The new object od class Hero should have value zero.
    $this->assertEquals(0, $hero->getStrength());
    $hero->setStrength(55);
    $this->assertEquals(55, $hero->getStrength());
  }

  /**
   * @expectedException \Exception
   */
  public function testHeroPassStrengthInvalidValue() {
    $hero = new Hero('elf');
    $hero->setStrength('invalid value');
  }

  /**
   *
   */
  public function testHeroPassHealthValue() {
    $hero = new Hero('human');
    // The new object od class Hero should have value zero.
    $this->assertEquals(0, $hero->getHealth());
    $hero->setHealth(55);
    $this->assertEquals(55, $hero->getHealth());
  }

  /**
   * @expectedException \Exception
   */
  public function testHeroPassHealthInvalidValue() {
    $hero = new Hero('elf');
    $hero->setHealth('invalid value');
  }
}
