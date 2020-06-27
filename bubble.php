<?php

$nums = array(3,5,6,7,8,2,1);
// 出力
var_dump(bubble_sort($nums));

function bubble_sort($array)
{
  for($i = 0; $i < count($array); $i++)
  {
    for($n = 1; $n < count($array); $n++)
    {
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