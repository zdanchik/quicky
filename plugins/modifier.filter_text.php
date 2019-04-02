<?php
function quicky_modifier_filter_text($texts, $filter) {
  foreach ($filter as $f) {
    if (!empty($texts[$f['folder']])) {
      return $texts[$f['folder']];
    }
  }
  if (!empty($texts['default'])) {
    return $texts['default'];
  }
  return '';
}