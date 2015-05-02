<?php
/**
 * User Model
 */
class User
{
    public $name;
    public $email;

    public function __construct($password)
    {
        $this->password = $password;
    }
}
