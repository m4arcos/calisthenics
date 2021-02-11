<?php

function validateHeroes($heroes)
{

    $requiredFields = [
        'name',
        'real_name',
        'powers',
        'publisher',
    ];

    $valid = true;

    foreach ($heroes as $hero) {

        $fields = array_keys($hero);

        foreach ($requiredFields as $requiredField) {

            if (! in_array($requiredField, $fields)) {
                $valid = false;
            }

        }

    }

    return $valid;
}

echo "Heróis " . (validateHeroes([
    ['name' => 'Batman', 'real_name' => 'Bruce Wayne', 'powers' => 'money', 'publisher' => 'DC Comics'],
    ['name' => 'Superman', 'real_name' => 'Clark Kent'],
    ['name' => 'Wonder Woman', 'real_name' => 'Diana Prince', 'powers' => 'Super strength', 'publisher' => 'DC Comics'],
]) ? "VÁLIDOS" : "INVÁLIDOS") . "\r\n";
