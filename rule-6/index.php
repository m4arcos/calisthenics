<?php

function calcPntsTkn($pct, $lfPnts)
{
    if ($pct <= 100) {
        $pnts = $lfPnts * ($pct / 100);
    } else {
        $pnts = $lfPnts;
    }

    return $pnts;
}

function calculateHitPointsTaken($percentualEffectiveness, $lifePoints)
{
    if ($percentualEffectiveness > 100) {
        return $lifePoints;
    }

    return $lifePoints * ($percentualEffectiveness / 100);
}

echo calcPntsTkn(15, 240) . PHP_EOL;
echo calculateHitPointsTaken(15, 240) . PHP_EOL;

// @TODO MÉTODO CORRETO

function fncClcX($y)
{
    return $y * 2;
}

function calculateNewXValue($x)
{
    return $x * 2;
}
