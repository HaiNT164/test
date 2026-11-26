<?php

$arr=[1,2,3,4,5,6];

function xoa1PT(&$arr,$viTri) {
    for ($i=$viTri;$i<count($arr)-1;$i++) $arr[$i]=$arr[$i+1];
}

xoa1PT($arr,2);

echo "<pre>";
print_r($arr);
echo "<pre>";