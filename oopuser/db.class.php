<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5 0005
 * Time: 19:04
 */

class Db{
    private $host="localhost";
    private $serverName="root";
    private $serverPwd="root";
    private $dbName="user";

    //设计模式 单例
    private static $conn;
    private static $self;
    public static function getInstance(){
        if(self::$self){

        }else{
            self::$self=new Db();
        }
        return self::$self;
    }

    public function connect(){
        if(!self::$conn){
            $params=array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );

            try{
                self::$conn =new PDO("mysql:host=$this->host; dbname=$this->dbName",$this->serverName,$this->serverPwd,$params);
                echo "连接成功";
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

        }

    }

    public function add(){

    }

    public function del(){

    }

    public function insert($sql,$_arr){
        $result=self::$conn->prepare($sql);
        $result->execute($_arr);
    }
    public function select($sql){

        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
        $arr=$stmt->fetch();

        return $arr;
    }

}