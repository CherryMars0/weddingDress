<?php


class Formal
{
    public $userName;
    function __construct()
    {

        $this->init();
        if (empty($_SESSION['userName'])) {
            $this->userName = 404;
        }else{
            $this->userName = $_SESSION['userName'];
        }
    }

    private function init()
    {
    }
}

$formal = new Formal();
