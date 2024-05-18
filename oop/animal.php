<?php
    class Animal
    {
        
    public $legs = 4;
    public $coldBlooded = "no";
    public $name;

    public function __construct($nama)
    {
        $this->name = $nama;
    }
}
?>