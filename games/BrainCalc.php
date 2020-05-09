<?php

namespace BrainGames\BrainCalc;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainCalc($isCorrect)
{
    $number = rand(1, 100);
    $answer = isEven($number) ? 'yes' : 'no';
    line("Question: %s", $number);
    $guess = prompt('Your answer');
    $isCorrect = $guess == $answer ? true : false;
    if ($isCorrect) {
        return true;
    } else {
        return false;
    };
}