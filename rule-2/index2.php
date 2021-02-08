<?php

class Hero {

    public function isValid() {
        return true;
    }

    public function save() {
        return true;
    }

    public function isUnique() {
        return true;
    }

}

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

    $hero->save();
    
    return view("edit");
}