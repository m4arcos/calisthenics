<?php

if ($x >= $y) {
    $x = $y * $num;

    $numX = $x / $cnt;
} else {
    $x = fncClcX($y);
}

// @TODO MÉTODO CORRETO

function fncClcX($y) {
    return $y * 2;
}

function calculateNewXValue($x) {
    return $x * 2;
}