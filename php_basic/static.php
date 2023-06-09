<?php
class StaticMethod{
    public static function sound():string{
        return "xin chao moi nguoi";
    }
}
class StaticDemo{
    public $name;
    public $value;

    /**
     * @param $name
     */
    public function __construct()
    {
        $this->name = StaticMethod::sound();
        $this->value=StaticProperty::$VALUE;
    }

}
$staticDemo=new StaticDemo();
echo $staticDemo->name."<br>";
echo $staticDemo->value."<br>";


class StaticProperty{
    public static $VALUE= 3.14;
}
