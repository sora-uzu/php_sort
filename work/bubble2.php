<?php

function getBubbleSort($arr){

  while(true){

    $flg = 0;
    for($i = 0; $i < count($arr)-1; $i++){
      $num1 = $arr[$i];
      $num2 = $arr[$i+1];

      if($num1 > $num2){
        $arr[$i] = $num2;
        $arr[$i+1] = $num1;
        $flg++;
      }
    }
    if($flg===0){break;}
  }
  return $arr;
}

$arr = array(3,6,7,1,2,8,9);

$res = getBubbleSort($arr);
echo join("<",$res);