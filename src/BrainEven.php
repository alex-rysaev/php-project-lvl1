<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainEven($name)
{
    $isCorrect = true;
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $answer = isEven($number) ? 'yes' : 'no';
        line("Question: %s", $number);
        $guess = prompt('Your answer');
        $isCorrect = $guess == $answer ? true : false;
        if ($isCorrect) {
            line("Correct!");
        } else {
            line("Incorrect!");
            break;
        }
    }
    if ($isCorrect) {
        line("Congratulations, %s!", $name);
    }
}
