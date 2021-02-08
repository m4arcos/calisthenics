<?php

function validateHeroes($heroes) {

    $requiredFields = [
        'name',
        'real_name',
        'powers',
        'publisher'
    ];

    $valid = true;
    
    // 1º nível
    foreach ($heroes as $hero) {

        // 2º nível
        if (!validateSingleHero($hero, $requiredFields)) {
            $valid = false;
        }
    }

    return $valid;
}

function validateSingleHero($hero, $requiredFields) {
    $valid = true;

    $fields = array_keys($hero);

    // 1º nível
    foreach ($requiredFields as $requiredField) {

        // 2º nível
        if (!in_array($requiredField, $fields)) {
            $valid = false;
        }
    }

    return $valid;
}

echo "Heróis " . (validateHeroes([
    ['name' => 'Batman', 'real_name' => 'Bruce Wayne', 'powers' => 'money', 'publisher' => 'DC Comics'],
    ['name' => 'Superman', 'real_name' => 'Clark Kent'],
    ['name' => 'Wonder Woman', 'real_name' => 'Diana Prince', 'powers' => 'Super strength', 'publisher' => 'DC Comics'],
]) ? "VÁLIDOS" : "INVÁLIDOS") . "\r\n";