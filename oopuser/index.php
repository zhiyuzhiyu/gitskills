<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4 0004
 * Time: 17:24
 */
//include "start.inc.php";
include "tool.class.php";
include "db.class.php";
include "user.class.php";
include "login.class.php";
include "regist.class.php";
include "manage.class.php";

$manage=new Manage();
$manage->view();
$manage->postData();
