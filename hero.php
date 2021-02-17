<?php

namespace App;

class Hero
{

    public function isValid()
    {
        return true;
    }

    public function save()
    {
        return true;
    }

    public function isUnique()
    {
        return true;
    }

    public function hasPowers()
    {
        return true;
    }

    public function hasPublisher()
    {
        return true;
    }

    public function usePower($power) {
        return $power;
    }
}
