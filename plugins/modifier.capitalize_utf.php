<?php
function quicky_modifier_capitalize_utf($text) {
  $encoding   = 'UTF-8';
  $textLength = mb_strlen($text, $encoding);

  return mb_strtoupper(mb_substr($text, 0, 1, $encoding), $encoding)
  . mb_substr($text, 1, $textLength - 1, $encoding);
}

