<?php

class Orang {
    protected $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function ucapSalam (){
        echo "Halo Perkenalkan Nama Saya " . $this->nama . "<br>";
    }
}