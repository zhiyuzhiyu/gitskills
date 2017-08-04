<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5 0005
 * Time: 15:51
 */
class desktopComputer implements Computer {
    public function version() {
        echo 'IBM';
    }
    public function work() {
        echo '台式电脑正在工作站运行！';
    }
}




