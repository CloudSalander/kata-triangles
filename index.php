<?php
//TODO: Autoload de dependencias automático :)
require('./class/triangle.php');
require('./class/downUpTriangle.php');
require('./class/upDownTriangle.php');
require('./class/TriangleType.php');

$rows = 3;
$triangleType = TriangleType::Symetric;

if($triangleType == TriangleType::DownUp || $triangleType == TriangleType::Symetric){
    $triangle = new DownUpTriangle($rows);
    $triangle->draw();
}

if($triangleType == TriangleType::UpDown || $triangleType == TriangleType::Symetric){
    $triangle = new upDownTriangle($rows);
    $triangle->draw();
}

?>