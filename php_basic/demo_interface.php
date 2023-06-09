<?php
interface AnimalDemo{
    public function make();
}
class Dog implements AnimalDemo{

      function make(): void
     {
        echo "gâu gâu";
    }
}
class Cat implements AnimalDemo{

     function make(): void
     {
        echo "meo meoo";
    }
}
class Mouse implements AnimalDemo{

     function make(): void
     {
        echo "chít chít";
    }
}
$dog=new Dog();
$cat=new Cat();
$mouse=new Mouse();
$array=array($dog,$cat,$mouse);
foreach ($array as $arr ){
    $arr->make();
}
echo "<hr>";
$arr=array(1,2,3);
var_dump($arr);

