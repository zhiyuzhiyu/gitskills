<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4 0004
 * Time: 17:27
 */
abstract class User{
    protected $user;
    protected $pwd;

    public function __construct()
    {
        $this->user=$_POST["user"];
        $this->pwd=$_POST["pwd"];
    }
    abstract function check();
}