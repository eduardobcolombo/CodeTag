<?php

namespace eduardobcolombo\CodeTag\Tests\CodeTag;

use eduardobcolombo\CodeTag\TagMain;

class TagTest extends \PHPUnit_Framework_TestCase
{

    public function test_check_if_implement_interface()
    {
        $tag = new TagMain();
        $this->assertInstanceOf('\eduardobcolombo\CodeTag\Tag', $tag);
    }

    public function test_check_set_name_for_tag()
    {

        $tag = new TagMain();
        $tag->setName('laravel');
        $this->assertEquals('laravel', $tag->getName());
    }


}