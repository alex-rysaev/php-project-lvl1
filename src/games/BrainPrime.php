<?php

namespace BrainGames\BrainPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

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
    $mission = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameParameters = [$mission];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $answer = isPrime($number) ? 'yes' : 'no';
        $gameParameters[1][] = [$question, $answer];
    }

    brainGames($gameParameters);
}
