<?php
require_once "class_bmi.php"; 

class Bmipasien extends BMI {
    public $berat;
    public $tinggi;
    public $tanggal;

    function __construct($berat, $tinggi, $tanggal) {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->tanggal = $tanggal;
    }
}
?>