<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5 0005
 * Time: 15:50
 */
class NotebookComputer implements Computer {
    public function version() {

        echo '联想120';
    }
    public function work() {
        echo '笔记本正在随时携带运行！';
    }
}



