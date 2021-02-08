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

    if ($hero->isValid()) {
        if ($hero->isUnique()) {
            $hero->save();
    
            return view("edit");
        } else {
            $error = "Duplicated hero";

            return view("create", $error);
        }
    } else {
        $error = "Invalid hero!";

        return view('create', $error);
    }
}