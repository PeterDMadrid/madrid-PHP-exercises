<?php
require "src/model/model.php";
use model\Format;

$format = new Format();
$format1 = $format->format1();
$format2 = $format->format2();
$format3 = $format->format3();
$format4 = $format->format4();
$format5 = $format->format5();

require "src/view/view.php";