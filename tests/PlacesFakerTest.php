<?php

use PHPUnit\Framework\TestCase;
use Faker\Factory;

final class SchoolNameFakerTest extends TestCase
{
    public function testCanGenerateSchoolName(): void
    {
        $class = 'SchoolNameFaker\Provider\SchoolFaker';
        $faker = Factory::create();
        $faker->addProvider(new $class($faker));
        $this->assertIsString($faker->schoolName());
    }
}