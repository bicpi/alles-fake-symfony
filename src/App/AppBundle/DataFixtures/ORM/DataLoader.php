<?php

namespace App\AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
use Faker\Provider\Base as FakerBase;

class DataLoader extends DataFixtureLoader
{
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/data.yml',
        );
    }

    public function skills($min, $max)
    {
        $skills = ['PHP', 'JavaScript', 'SQL', 'NoSQL', 'Linux'/*, ...*/];
        $count = FakerBase::numberBetween($min, $max);

        return FakerBase::randomElements($skills, $count);
    }
}