# SchoolNamesFaker

Generate school names using fakerphp/faker

## Installation

```
composer require darwinsalinas/school-names-faker
```

## Usage

```
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \SchoolNameFaker\Provider\SchoolFaker($faker));

// Generator
$faker->schoolName();
```

In laravel you can add the provider this way:

```
fake()->addProvider(new School(fake()));
```
