<?php

namespace eduardobcolombo\CodeTag;

class TagMain implements Tag
{
    private $name = "tag_name";

    public function getName()
    {
        return $this->name;

    }

    public function setName($name)
    {
        $this->name = $name;
    }
}