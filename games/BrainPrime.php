<?php

namespace BrainGames\BrainPrime;

use function cli\line;
use function cli\prompt;

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $number = rand(1, 100);
    $answer = isPrime($number) ? 'yes' : 'no';
    line("Question: %s", $number);
    $guess = prompt('Your answer');
    $answerAndGuess = [$answer, $guess];
    return $answerAndGuess;
}
