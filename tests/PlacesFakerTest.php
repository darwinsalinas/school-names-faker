<?php

use PHPUnit\Framework\TestCase;
use Faker\Factory;

final class PlacesFakerTest extends TestCase
{
    public function testCanGenerateSchoolName(): void
    {
        $class = 'SchoolNameFaker\Provider\School';
        $faker = Factory::create();
        $faker->addProvider(new $class($faker));
        $this->assertIsString($faker->schoolName());
    }
}