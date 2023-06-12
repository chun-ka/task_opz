<?php
function demo($a,$b){
    if (!$b){
        throw new Exception("không được chia cho số 0");
    }
    return $a/$b;
}

try {
    demo(3,0);
}catch (Exception $e){
    echo $e->getMessage();
}
