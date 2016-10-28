<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 27.10.16
 * Time: 16:50
 */

require_once __DIR__ . '/vendor/autoload.php';

use Veta\Homework\Auth\Auth;
use Veta\Homework\Auth\AuthInheritance;

$user = new Auth('test', 'test');
$user->loginUser();
$user_up = new AuthInheritance('NewTest','test');
$user_up->updateUser();



