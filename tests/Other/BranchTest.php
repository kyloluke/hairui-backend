<?php

namespace Tests\Other;

use PHPUnit\Framework\TestCase;

class BranchTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @throws \Exception
     */
    public function test_example()
    {

        $branch = getenv('CIRCLE_BRANCH');


//        dd(base_path());
//        $res = app()->environment('production');

        dump(realpath(base_path().'/only_develop_file.txt'));

        $res = file_exists(realpath(base_path().'/only_develop_file111.txt'));
        dump($res);
        dump($branch);


        if($branch == 'develop' && $res) {
//            throw new \Exception('test error');
            $this->throwException(new \Exception('test error'));
        } else {
            $this->assertTrue(true);
        }
    }
}
