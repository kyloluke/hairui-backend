<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {

        $branch = getenv('CIRCLE_BRANCH');

        $res = file_exists(base_path().'/only_develop_file.txt');

        dump($res);

        dump($branch);
        $this->assertTrue(false);
    }
}
