<?php 

class orang{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function ucapSalam(){
        echo "Hallo nama saya " .$this->nama . "<br>";
    }
}
