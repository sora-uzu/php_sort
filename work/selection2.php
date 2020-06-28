<?php

function selectSort($nums){
  // 数値配列を最初から順番に評価していく
  for($i = 0; $i < count($nums)-1; $i++){
    // 最初うちの格納変数（最初は評価対象値を入れておく）
    $min = $nums[$i];
    // 入換対象番号用変数
    $num = $i;
    // 評価番号以降の一番低い数値を取得
    for($j = $num+1; $j < count($nums); $j++){
      if($min > $nums[$j]){
        $num = $j;
        $min = $nums[$j];
      }
    }
    // 評価番号と入れ替え番号が同じ場合は入れ替えなしとして処理しない
    if($num == $i){continue;}
    // 評価番号と入れ替え番号を入れ替え
    $nums[$num] = $nums[$i];
    $nums[$i] = $min;
  }
  return $nums;
}

$res = selectSort(array(10,2,3,4,6,1,7,8,33,22,));

echo join(",",$res);
echo PHP_EOL;