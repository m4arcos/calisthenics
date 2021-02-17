<?php

use App\Hero;
use App\Villain;

function view($view, $error = null)
{
    echo $view . (!empty($error) ? " - " . $error : "");
}

function createHero(Hero $hero)
{

    if ($hero->isValid()) {
        if ($hero->isUnique()) {
            if ($hero->hasPowers()) {
                if ($hero->hasPublisher()) {
                    $hero->save();

                    return view("edit");
                } else {
                    $error = "The publisher info is missing";

                    return view("create", $error);
                }
            } else {
                $error = "The power info is missing";

                return view("create", $error);
            }
        } else {
            $error = "Duplicated hero";

            return view("create", $error);
        }
    } else {
        $error = "Invalid hero!";

        return view('create', $error);
    }

}

function battle(Villain $villain, Hero $hero) {
    if ($villain->name == "Thanos") {
        $villain->usePower("The Decimation");

        return "Decimate hald of the universe!";
    } elseif ($villain->name == "Venom") {
        $villain->kill($hero);

        return "We are VENOM!";
    } elseif ($hero == "Batman") {
        return "Batman wins! He is always prepared!";
    }
}
