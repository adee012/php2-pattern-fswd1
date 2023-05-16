<?php
require_once 'Animal.php';

class Dog extends Animals
{
    // properties
    public $info;
    // construct
    function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Anjing";
        $this->info = "Anjing adalah hewan yang setia dan cerdas";

        // echo $this->getInfo();
    }

    public function getInfo()
    {
        return "Hewan ini adalah $this->nama jenis $this->jenis . $this->info";
    }
}
