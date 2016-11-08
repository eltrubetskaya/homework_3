<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 28.10.16
 * Time: 15:00.
 */

namespace Veta\Homework\Auth;

abstract class AbstractAuth
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

     /**
     * @var string
     */
    private $rememberMe;

    /**
     * @param string $username
     * @param string $password
     * @param bool $rememberMe
     */
    public function __construct($username, $password, $rememberMe = true)
    {
        $this->username = $username;
        $this->password = $password;
        $this->rememberMe = $rememberMe;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        if ($this->validatePassword() === true) {
            return $this->username;
        } else {
            return null;
        }
    }

    /**
     * @return false|true
     *
     * @internal param string $this ->password
     */
    public function validatePassword()
    {
        /*
         * Validates password
         */

        if ($this->password) {
            return true;
        } else {
            return false;
        }
    }
}
