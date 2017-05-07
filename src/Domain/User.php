<?php

namespace CIINTEGRATION\Domain;

class User
{

    private $id;
    private $name;

    function __construct()
    {
        $this->id = '1';
        $this->name = 'Jhon';
    }

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }


}
