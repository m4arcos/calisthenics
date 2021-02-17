<?php

namespace App;

use App\Hero;

class Villain extends Hero
{
    public function kill(Hero $hero) {
        return true;
    }
}
