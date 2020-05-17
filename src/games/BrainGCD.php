<?php

namespace BrainGames\BrainGCD;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

function getGCD($a, $b)
{
    while ($a !== 0 && $b !== 0) {
        if ($a >= $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return $a + $b;
}

function brainGCD()
{
    $mission = 'Find the greatest common divisor of given numbers.';
    $gameParameters[] = $mission;
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = (string) getGCD($firstNumber, $secondNumber);
        $gameParameters[1][] = [$question, $answer];
    }
    
    brainGames($gameParameters);
}
