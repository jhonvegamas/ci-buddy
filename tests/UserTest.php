<?php

use CIINTEGRATION\Domain\User;
use PHPUnit_Extensions_PhptTestCase;

class UserTest extends PHPUnit_Framework_TestCase
{

    function test_is_a_id()
    {
        $user = new User();
        $this->assertEquals('', $user->getId());
    }

}
