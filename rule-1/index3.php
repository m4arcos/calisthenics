<?php

function validateHeroes($heroes) {
    $validHeroes = array_filter($heroes, 'isValidHero');

    return (count($validHeroes) === count($heroes));
}

function isValidHero($hero) {
    $requiredFields = [
        'name',
        'real_name',
        'powers',
        'publisher'
    ];

    $fields = array_keys($hero);
    $missingFields = array_diff($requiredFields, $fields);

    return (count($missingFields) == 0);
}

echo "Heróis " . (validateHeroes([
    ['name' => 'Batman', 'real_name' => 'Bruce Wayne', 'powers' => 'money', 'publisher' => 'DC Comics'],
    ['name' => 'Superman', 'real_name' => 'Clark Kent'],
    ['name' => 'Wonder Woman', 'real_name' => 'Diana Prince', 'powers' => 'Super strength', 'publisher' => 'DC Comics'],
]) ? "VÁLIDOS" : "INVÁLIDOS") . "\r\n";