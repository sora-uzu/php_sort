<?php

$nums = array(3,5,6,7,8,2,1);
// 出力
var_dump(bubble_sort($nums));

function bubble_sort($array)
{
  // 要素数分繰り返し
  for($i = 0; $i < count($array); $i++)
  {
    // 要素数ー1繰り返し
    for($n = 1; $n < count($array); $n++)
    {
      // 左の数字が右の数字よりも大きかったら入れ替え
      if($array[$n-1] > $array[$n])
      {
          $temp = $array[$n];
          $array[$n] = $array[$n-1];
          $array[$n-1] = $temp;
      }
    }
  }
  return $array;
}