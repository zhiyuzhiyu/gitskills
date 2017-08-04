<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4 0004
 * Time: 17:26
 */
class Regist extends User{
    private $email;
    public function __construct()
    {
        parent::__construct();
        $this->email=$_POST["email"];
    }

    public function check()
    {
        // TODO: Implement check() method.
        $db=Db::getInstance();
        $db->connect();
//        include "login.inc.php";

        $sql="SELECT * FROM user WHERE user='".$this->user."'";
        $arr=$db->select($sql);
//
        if($arr){
                Tool::alert("用户已存在",'index.php?type=regist');
        }else{
            $sql="insert into user (user,pwd) VALUE (?,?)";
            $_arr=[$this->user,$this->pwd];
            $db->insert($sql,$_arr);

            Tool::alert("注册成功",'index.php?type=login');
        }
    }
}