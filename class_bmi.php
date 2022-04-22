<?php
require_once "class_pasien.php";

class BMI extends Pasien {
    public $berat;
    public $tinggi;
    function __construct($berat, $tinggi) {
        $this -> berat = (int)$berat;
        $this -> tinggi = (int)$tinggi;
    }
    function nilaiBMI () {
        $nilai = $this -> berat / pow(($this -> tinggi / 100), 2);
        $hasil = sprintf("%.1f", $nilai);
        return $hasil;
    }
    function statusBMI() {
        if (self:: nilaiBMI() < 18.5) {
            $ktr = "Kekurangan Bobot";
        } else if (self::nilaiBMI() >= 18.5 && self::nilaiBMI() < 23.9) {
            $ktr = "Sehat" ;
        } else if (self::nilaiBMI() >= 24 && self::nilaiBMI() < 26.9) {
            $ktr = "Kelebihan Bobot";
        } else if (self::nilaiBMI() >= 27 && self::nilaiBMI() < 29.9) {
            $ktr = "Obesitas 1";
        } else if (self::nilaiBMI() < 30) {
            $ktr = "Obesitas 2";
        } else {
            $ktr = "Bilangan yang anda masukan salah";
        }
        return $ktr;
    }
}
?>