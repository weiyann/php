<?php
class MyMath {
static function distance($x1, $y1, $x2, $y2) {
$dx = $x1 - $x2;
$dy = $y1 - $y2;
return sqrt($dx * $dx + $dy * $dy);
}
}
echo MyMath::distance(1, 1, 11, 11);