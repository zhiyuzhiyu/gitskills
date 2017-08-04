<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4 0004
 * Time: 17:25
 */

class Manage{
    //当前决定需要显示的视图
    public function view(){
        if($_GET){
            if($_GET["type"]=="login"){
                include "login.inc.php";
            }else{
                include "regist.inc.php";
            }
        }else if(!$_POST){
            include "start.inc.php";
    }
    }
    //
    public function postData(){
        if($_POST){
            if($_POST["submit"]=="登录"){
                //需要把传过来的用户名密码存入数据库
                $login=new Login();
                $login->check();
            }else{
                $login=new Regist();
                $login->check();
            }
        }
    }
}