<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 28.10.16
 * Time: 14:46.
 */

namespace Veta\Homework\Auth;

class Auth extends AbstractAuth implements AuthInterface
{
    /**
     * {@inheritdoc}
     */
    public function loginUser()
    {
        /*
         * Login User.
         */

        if ($this->getUsername() != null) {
            echo 'User: '.$this->getUsername().'!';
        }
    }

     /**
      * {@inheritdoc}
      */
     public function logoutUser()
     {
         /*
          * Logs out user
          */
     }

    /**
     * {@inheritdoc}
     */
    public function findUserIdByUsername()
    {
        /*
         * Finds an user Id by Username.
         */
    }
}
