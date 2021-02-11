<?php

$this->heroModel->findFirst(["race" => "kryptonian"])->addPower("Heat vision")->removePower("Breath underwater");

$hero = $this->heroModel->findFirst(["race" => "kryptonian"]);

$hero->addPower("Heat vision")
    ->removePower("Breath underwater");
