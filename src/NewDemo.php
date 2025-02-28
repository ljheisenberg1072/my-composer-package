<?php

namespace Ljheisenberg\MyComposerPackage;

class NewDemo
{
    private $name;
    public function read($name)
    {
        $this->setName($name);
        return $this->getName();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}