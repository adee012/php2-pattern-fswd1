<?php
require_once 'Animal.php';

class Cat extends Animals
{
    // properties
    public $info;
    // construct
    function __construct($jenis)
    {
        $this->nama = "Kucing";
        $this->jenis = $jenis;
        $this->info = "Kucing adalah hewan yang suka bermain dan bersih.";

        // echo $this->getInfo();
    }

    public function getInfo()
    {
        return "Hewan ini adalah $this->jenis jenis $this->nama . $this->info";
    }
}
