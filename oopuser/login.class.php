<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4 0004
 * Time: 17:24
 */
class login extends User{
    public function check()
    {
        // TODO: Implement check() method.
        $db=Db::getInstance();
        $db->connect();
//
//        echo $this->user;
        $sql="SELECT * FROM user WHERE user='".$this->user."'";
        $arr=$db->select($sql);

        if($arr){
            if($this->pwd==$arr["pwd"]){
                include "member.inc.php";
            }else{
                Tool::alert("密码不正确",'index.php?type=login');
            }

        }else{
            Tool::alert("当前用户不存在",'index.php?type=login');
        }






//        include "member.inc.php";

    }

}