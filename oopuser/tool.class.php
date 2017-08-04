<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5 0005
 * Time: 18:34
 */
class Tool{
    public static function alert($message,$url){
        echo "<script>alert('".$message."');location.href='".$url."';</script>";
    }
}



