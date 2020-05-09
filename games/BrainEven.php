<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainEven()
{   
    $answerAndGuess = [];
    $number = rand(1, 100);
    $answer = isEven($number) ? 'yes' : 'no';
    line("Question: %s", $number);
    $guess = prompt('Your answer');
    $answerAndGuess = [$answer, $guess];
    return $answerAndGuess;
}