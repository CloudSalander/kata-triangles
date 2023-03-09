<?php
require('./class/Triangle.php');
require('./class/downUpTriangle.php');
require('./class/symetricTriangle.php');
require('./class/upDownTriangle.php');
require('./class/triangleType.php');

/*
foreach (scandir('./class/') as $filename) {
    $path = dirname(__FILE__) . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
}*/

$rows = 3;
$triangleType = TriangleType::upDown;

switch ($triangleType) {
    case TriangleType::upDown:
        $triangle = new upDownTriangle(3);
        break;
    
    default:
        // code...
        break;
}


?>