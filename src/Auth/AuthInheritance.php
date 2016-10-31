<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 28.10.16
 * Time: 20:27.
 */

namespace Veta\Homework\Auth;

class AuthInheritance extends Auth
{
    /**
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        parent::__construct($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function updateUser()
    {
        if ($this->getUsername() != null) {
            echo 'User_update: '.$this->getUsername()."!\n";
        }
    }
}
