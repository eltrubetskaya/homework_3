<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 28.10.16
 * Time: 14:47
 */

namespace Veta\Homework\Auth;


interface AuthInterface
{
    /**
     * Login User.
     * @return true|false
     * @internal param string $username
     * @internal param string $password
     */
    public function loginUser();

    /**
     * @return void
     * @internal param string $username
     */
    public function logoutUser();

    /**
     * Finds an user Id by Username.
     * @return user object or null
     * @internal param string $username
     */
    public function findUserIdByUsername();
}