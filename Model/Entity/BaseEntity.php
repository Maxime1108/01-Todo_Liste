<?php

namespace Model\Entity;

abstract class BaseEntity
{
    private $id;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
