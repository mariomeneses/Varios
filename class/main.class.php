<?php
include 'user.class.php';
class mainSys {

    public $elatr = 'El atributo';

    public function init()
    {
        $user = new User();
//        var_dump($user->login());
//        var_dump($user->logout());
        var_dump($this->hide());
    }

    private function hide(){
        die("Stop!");
    }
}