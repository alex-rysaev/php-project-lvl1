<?php

namespace BrainGames\BrainProgression;

use function cli\line;
use function cli\prompt;

function brainProgression()
{
    $step = rand(1, 10);
    $maskedPosition = rand(0, 9);
    $startNumber = rand(1, 10);
    $progression[] = $startNumber;
    for ($i = 0; $i < 9; $i++) {
        $progression[] = $progression[$i] + $step;
    }
    $answer = $progression[$maskedPosition];
    $progression[$maskedPosition] = '..';
    line("Question: {:0} {:1} {:2} {:3} {:4} {:5} {:6} {:7} {:8} {:9}", $progression);
    $guess = prompt('Your answer');
    $answerAndGuess = [(int) $answer, (int) $guess];
    return $answerAndGuess;
}
