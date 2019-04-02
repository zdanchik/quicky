<?php
function quicky_modifier_spec_ending($endings, $count, $concat = true) {
  if (empty($endings['spec']['ed']['ip']) || empty($endings['spec']['ed']['vp']) || empty($endings['spec']['mn']['rp']) || empty($endings['spec']['mn']['ip'])) {
    throw new \Exception('empty ending');
  }
  $number = (int)$count;
  if ($number == 0 && !empty($endings['spec']['mn']['ip'])) {
    return $endings['spec']['mn']['ip'];
  }
  $number = $number % 100;
  if ($number >= 11 && $number <= 19) {
    $ending = $endings['spec']['mn']['rp'];
  } else {
    $i = $number % 10;
    switch ($i) {
      case 1:
        $ending = $endings['spec']['ed']['ip'];
        break;
      case 2:
      case 3:
      case 4:
        $ending = $endings['spec']['ed']['rp'];
        break;
      default:
        $ending = $endings['spec']['mn']['rp'];
    }
  }

  if ($concat) {
    return $count . " " . $ending;
  } else {
    return $ending;
  }
}
