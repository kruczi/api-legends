<?php

namespace Drupal\api_legends\Tests\Unit;

use Drupal\api_legends\Model\Hero;
use Drupal\api_legends\Service\HeroLoader;
use PHPUnit\Framework\TestCase;

class HeroLoaderTest extends TestCase {

  public function testGetHeroes() {
    $heroLoader = new HeroLoader();
    $heroes = $heroLoader->getHeroes();
    self::assertIsArray($heroes);
    $firstHero = $heroes[0];
    self::assertInstanceOf(Hero::class, $firstHero);
  }

}
