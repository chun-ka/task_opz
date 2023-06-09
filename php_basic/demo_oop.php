<?php

class Fruit {

    public $name;
    private $color;

    function __construct( $name, $color ) {
        $this->name = $name;
        $this->color = $color;
    }

    // function __destruct() {
    //     echo "{$this->getName()} đã bị phá hủy <hr>";
    // }

    /**
    * @return mixed
    */

    public function getColor() {
        return $this->color;
    }

    /**
    * @param mixed $color
    * @return self
    */

    public function setColor( $color ): self {
        $this->color = $color;
        return $this;
    }

    /**
    * @return mixed
    */

    public function getName() {
        return $this->name;
    }

    /**
    * @param mixed $name
    * @return self
    */

    function setName( $name ): self {
        $this->name = $name;
        return $this;
    }
}
$apple = new Fruit( 'ớt', 'xanh' );
$banana = new Fruit( 'chanh', 'vàng' );
echo 'Tên trái cây: ' . $apple->getName() . '<br>';
echo 'Màu sắc: ' . $apple->getColor() . '<br>';
$apple->setName( 'Táo' );
$apple->setColor( 'Đỏ' );

echo 'Tên trái cây: ' . $apple->getName() . '<br>';
echo "Màu sắc:  {$apple->getColor()}<br>";

$apple->name = 'Táo xanh';
echo "Trung: {$apple->name}<hr>";

// var_dump( $apple instanceof Fruit );

class Animal {
    protected $name;
    public $color;

    function __construct( $name, $color ) {
        $this->name = $name;
        $this->color = $color;
    }

    /**
    * @return mixed
    */
    protected function getColor() {
        return $this->color;
    }

    /**
    * @param mixed $color
    * @return self
    */

    public function setColor( $color ): self {
        $this->color = $color;
        return $this;
    }

    /**
    * @return mixed
    */

    public function getName() {
        return $this->name;
    }

    /**
    * @param mixed $name
    * @return self
    */

    public function setName( $name ): self {
        $this->name = $name;
        return $this;
    }
}
$dog = new Animal( 'Chó', 'Đen' );
echo 'Tên:' .$dog->getName();
// echo $dog->getColor;
echo $dog->color;
?>