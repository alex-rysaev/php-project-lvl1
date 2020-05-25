<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\brainEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function brainProgression()
{
    $mission = 'What number is missing in the progression?';
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $step = rand(1, 10);
        $maskedPosition = rand(0, 9);
        $startNumber = rand(1, 10);
        $progressionMembersCount = 10;

        for ($j = 0; $j < $progressionMembersCount; $j++) {
            $progression[] = $startNumber + $step * $j;
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
