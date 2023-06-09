<?php

class Animal {
    public $name;
    public $color;

    public function __construct( $name, $color ) {
        $this->name = $name;
        $this->color = $color;
    }

    public function say() {
        echo "Xin chào mình là {$this->name} <hr>";
    }
}

class Dog extends Animal {
    public function info() {
        echo "Xin chào tôi là {$this->name},tôi màu {$this->color}<br>";
    }
}

$dog = new Dog( 'Alaska', 'Vàng' );
$dog->info();
$dog->say();

class Cat extends Animal {
    const API = 'hãy truy cập trang web của công ty chúng tôi';
    public $weight;

    public function __construct( $name, $color, $weight ) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function say() {
        echo self::API.'<br>';
        echo "Tôi là {$this->name},màu {$this->color},nặng {$this->weight}";
    }
}
echo Cat::API.'<br>';
$cat = new Cat( 'mun', 'trắng', '10kg' );
$cat->say();

?>