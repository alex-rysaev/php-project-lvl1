<?php

namespace BrainGames\BrainGCD;

use function cli\line;
use function cli\prompt;

function getGCD($a, $b)
{
    while ($a !== 0 || $b !== 0) {
        if ($a >= $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return a + b;
}

function brainGCD()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    line("Question: %s %s", $firstNumber, $secondNumber);
    $answer = getGCD($firstNumber, $secondNumber);
    $guess = prompt('Your answer');
    $answerAndGuess = [(int) $answer, (int) $guess];
    return $answerAndGuess;
}
