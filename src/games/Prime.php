<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\brainEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $mission = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $answer = isPrime($number) ? 'yes' : 'no';
        $questionsAndAnswers[] = [$question, $answer];
    }

    brainEngine($mission, $questionsAndAnswers);
}
