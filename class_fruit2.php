<?php
class Fruit {
    public $set_name;
    public $set_color;
    public function __construct($set_nama, $set_color) {
        $this -> set_name = $set_nama;
        $this -> set_color = $set_color;
    }
    public function intro() {
        echo "The fruit is {$this -> set_name} and the color is {$this -> set_color}.";
    }

}
?>