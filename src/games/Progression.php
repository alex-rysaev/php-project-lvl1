<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

function brainProgression()
{
    $mission = 'What number is missing in the progression?';
    
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $progressionSize = 10;
        $step = rand(1, 10);
        $startNumber = rand(1, 10);

        for ($j = 0; $j < $progressionSize; $j++) {
            $progression[] = $startNumber + $step * $j;
        }

        $maskedPosition = array_rand($progression);
        $answer = (string) $progression[$maskedPosition];
        $progression[$maskedPosition] = '..';
        $question = implode(' ', $progression);
        $questionsAndAnswers[] = [$question, $answer];
        $progression = [];
    }
    
    engine($mission, $questionsAndAnswers);
}
