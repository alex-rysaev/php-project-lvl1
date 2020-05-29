<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

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
    
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = (string) getGCD($firstNumber, $secondNumber);
        $questionsAndAnswers[] = [$question, $answer];
    }
    
    engine($mission, $questionsAndAnswers);
}
