<?php
class Fruit {
    public $name;
    public $color;
    public $weight;
    function name($n) {
        $this -> name = $n;
    }
    protected function color($n) {
        $this -> color = $n;
    }
    private function weight($n) {
        $this -> weight - $n;
    }
}
$mango = new Fruit();
$mango -> name = 'Manggo';
$mango -> color =  'Yellow';
$mango -> weight = '300';

?>