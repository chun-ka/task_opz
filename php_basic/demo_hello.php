<?php
$arr1=[1,2,3,4,5,6,7,8];
$arr2=$arr3=$arr4=$arr5=[];
for ($i=0;$i<count($arr1);$i++){
    if($arr1[$i]%2==0){
        array_push($arr3,$arr1[$i]);
    }else{
        array_push($arr2,$arr1[$i]);

    }
}
$arr4=array_merge($arr2,$arr3);


//var_dump($arr2);
//var_dump($arr3);
print_r($arr4);
echo "<br>";


$index=0;
$index2=count($arr1)-1;
for ($i=0;$i<count($arr1);$i++) {
    if ($arr1[$i] % 2 != 0) {
        $arr5[$index] = $arr1[$i];
        $index++;
    } else {
        $arr5[$index2] = $arr1[$i];
        $index2--;
    }
}
    print_r($arr5);



