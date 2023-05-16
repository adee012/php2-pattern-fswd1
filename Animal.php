<?php

class Animals
{
    // properties
    public $nama;
    public $jenis;

    // construct
    function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;

        // echo $this->getInfo();
    }

    public function getInfo()
    {
        return "Hewan ini adalah  $this->nama jenis $this->jenis";
    }
}
