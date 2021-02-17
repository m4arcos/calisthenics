<?php

use App\Hero;

function view($view, $error = null) {
    echo $view . (!empty($error) ? " - " . $error : "");
}

function createHero(Hero $hero) {

    if (!$hero->isValid()) {
        return view('create', "Invalid hero!");
    }

    if (!$hero->isUnique()) {
        return view("create", "Duplicated hero");
    }

    if (!$hero->hasPowers()) {
        return view("create", "The power info is missing");
    }

    if (!$hero->hasPublisher()) {
        return view("create", "The publisher info is missing");
    }

    $hero->save();
    
    return view("edit");

}
