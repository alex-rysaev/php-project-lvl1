<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\brainEngine;

use const BrainGames\Engine\ROUNDS;

function brainProgression()
{
    $mission = 'What number is missing in the progression?';
    for ($i = 0; $i < ROUNDS; $i++) {
        $step = rand(1, 10);
        $maskedPosition = rand(0, 9);
        $startNumber = rand(1, 10);
        $progression[] = $startNumber;
        for ($j = 0; $j < 9; $j++) {
            $progression[] = $progression[$j] + $step;
        }
        $answer = (string) $progression[$maskedPosition];
        $progression[$maskedPosition] = '..';
        $question = [];
        foreach ($progression as $progressionMember) {
            $question[] = $progressionMember;
        }
        $question = implode(' ', $question);
        $questionsAndAnswers[] = [$question, $answer];
        $progression = [];
    }
    
    brainEngine($mission, $questionsAndAnswers);
}
