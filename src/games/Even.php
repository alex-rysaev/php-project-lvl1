<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

function isEven($number)
{
    return $number % 2 == 0;
}

function even()
{
    $mission = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $answer = isEven($number) ? 'yes' : 'no';
        $questionsAndAnswers[] = [$question, $answer];
    }
    
    engine($mission, $questionsAndAnswers);
}
