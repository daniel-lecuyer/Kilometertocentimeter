<?php
function convertMeterToCentimeter($meter) {
    $centimeter = $meter * 100;
    return $centimeter;
}
function convertKilometerToMeter($kilometer) {
    $meter = $kilometer * 1000;
    return $meter;
}
$kilometer = 62;
$meter = convertKilometerToMeter($kilometer);
$centimeter = convertMeterToCentimeter($meter);
echo PHP_EOL."The result is: ".$centimeter.PHP_EOL;
