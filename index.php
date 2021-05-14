<?php
include_once "MyList.php";
$arr = [1,2,3,4];
$arrayList = new MyList( $arr);

//$arr1 = [5,6,7,8];
//
//$arrayList->addAll($arr1);
//$arrayList->get(4);
//echo $arrayList->size();
$arrayList->show();
var_dump($arrayList->isEmpty());
echo "<br>";

