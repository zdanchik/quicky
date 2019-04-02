<?php
function quicky_modifier_number_ending($endings, $count, $concat = true) {
  if (empty($endings[0]) || empty($endings[1]) || empty($endings[2])) {
    throw new \Exception('empty ending');
  }
  $number = (int)$count;
  if ($number == 0 && !empty($endings[3])) {
    return $endings[3];
  }
  $number = $number % 100;
  if ($number >= 11 && $number <= 19) {
    $ending = $endings[2];
  } else {
    $i = $number % 10;
    switch ($i) {
      case 1:
        $ending = $endings[0];
        break;
      case 2:
      case 3:
      case 4:
        $ending = $endings[1];
        break;
      default:
        $ending = $endings[2];
    }
  }

  if ($concat) {
    return $count . " " . $ending;
  } else {
    return $ending;
  }
}
