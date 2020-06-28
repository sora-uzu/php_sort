<?php
$nums = array(4,2,65,1,6,8,9);

var_dump(selection_sort($nums));

function selection_sort($array)
{
  for($i = 0; $i < count($array)-1; $i++)
  {
    $temp_minimum_number = $array[$i];
    $temp_minimum_number_position = $i;

    for($j = $i + 1; $j < count($array); $j++)
    {
      if($temp_minimum_number > $array[$j])
      {
        $temp_minimum_number = $array[$j];
        $temp_minimum_number_position = $j;
      }
    }

    $temp_number = $array[$temp_minimum_number_position];
    $array[$temp_minimum_number_position] = $array[$i];
    $array[$i] = $temp_number;
  }
  return $array;
}