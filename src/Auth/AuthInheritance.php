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
    /**Param $rememberMe will required and $password will in format md5
     * @param string $username
     * @param string $password
     * @param bool $rememberMe
     */
    public function __construct($username, $password, $rememberMe = true)
    {
        parent::__construct($username, $this->formatPassword($password), $rememberMe);
    }

    /**
     * @param $password
     * @return string
     */
    public function formatPassword($password)
    {
        return md5($password);
    }
}
