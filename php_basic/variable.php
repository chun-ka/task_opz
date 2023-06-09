<?php
$name = 'trung';
$x = 10;
$y = 10;
echo $name.'<br>';
echo $x.'<br>';
echo "toi yeu $name".'<br>';
echo 'toi ten la '.$name.'!<br>';
echo $x+$y.'<hr>'.'<hr>';
$num1 = 50;

function myTest() {
    $z = 5;

    echo "<p>Variable x inside function is: $z</p>";
}
myTest();

function myTest1() {
    global $x, $y;
    $x = $x+$y;
    echo $x;
}
myTest1();

function demo() {
    static $num = 0;
    echo $num;
    $num++;
}
echo '<br>';
demo();
echo '<br>';
demo();
echo '<br>';
demo();
echo '<br>';

echo str_word_count ( 'trung' );
echo '<br>';

$a = '12345';
$b = ( int )$a;
echo $b;

const cst = [ 1, 2, 3 ];

$time = date( 'H' );
if ( $time>'20' ) {
    echo $time;
}

$swit = 'w';
switch( $swit ) {
    case ( 'anh' ):
    echo 1;
    break;
    case( 'em' ):
    echo( 2 );
    break;
    default:
    echo 3;




echo "<br>";

for($x1=0;$x1<=6;$x1++){
    echo "$x1 <br>";
}

$ast=array("trung","kha");
foreach($ast as $at){
    echo "$at <br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Xin chào, " . $_POST["name"] . "!";
}

}
