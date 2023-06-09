<?php
trait infoOne{
    public function massageOne(){
        echo "day la tin nhan 1 <br>";
    }
    public function massageTwo(){
        echo "day la tin nhan 2 <br>";
    }
}
trait infoTwo{
    public function makeOne(){
        echo "day la loi thoai 1 <br>";
    }
    public function makeTwo(){
        echo "day la loi thoai 2 <br>";
    }
}
class TestOne{
    use infoOne;
}
class TestTwo{
    use infoOne,infoTwo;
}

$testOne=new TestOne();
$testTwo=new TestTwo();

$testOne->massageOne();
$testOne->massageTwo();

$testTwo->makeTwo();
$testTwo->makeOne();
$testTwo->massageTwo();
$testTwo->massageOne();