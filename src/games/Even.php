<?php

namespace BrainGames\Even;

use function BrainGames\Engine\brainEngine;

use const BrainGames\Engine\ROUNDS;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainEven()
{
    $mission = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $answer = isEven($number) ? 'yes' : 'no';
        $questionsAndAnswers[] = [$question, $answer];
    }
    
    brainEngine($mission, $questionsAndAnswers);
}
