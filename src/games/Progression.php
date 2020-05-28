<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

function progression()
{
    $mission = 'What number is missing in the progression?';
    
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $progressionSize = 10;
        $step = rand(1, 10);
        $maskedPosition = rand(0, $progressionSize - 1);
        $startNumber = rand(1, 10);

        for ($j = 0; $j < $progressionSize; $j++) {
            $progression[] = $startNumber + $step * $j;
        }

        $answer = (string) $progression[$maskedPosition];
        $progression[$maskedPosition] = '..';
        $question = implode(' ', $progression);
        $questionsAndAnswers[] = [$question, $answer];
        $progression = [];
    }
    
    engine($mission, $questionsAndAnswers);
}
