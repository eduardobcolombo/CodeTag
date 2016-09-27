<?php
namespace eduardobcolombo\CodeTag\Tests\Models;

use eduardobcolombo\CodeTag\Tag;
use eduardobcolombo\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_if_a_tag_can_be_persisted()
    {
        $tag = Tag::create(['name'=>'Tag 1', 'timestamp'=> time()]);
        $this->assertEquals('Tag 1', $tag->name);

        $tag = Tag::all()->first();
        $this->assertEquals('Tag 1', $tag->name);
    }

}