<?php

namespace BrainGames\BrainProgression;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

function brainProgression()
{
    $mission = 'What number is missing in the progression?';
    $gameParameters = [$mission];
    for ($i = 0; $i < 3; $i++) {
        $step = rand(1, 10);
        $maskedPosition = rand(0, 9);
        $startNumber = rand(1, 10);
        $progression[] = $startNumber;
        for ($j = 0; $j < 9; $j++) {
            $progression[] = $progression[$j] + $step;
        }
        $answer = (string) $progression[$maskedPosition];
        $progression[$maskedPosition] = '..';
        $question = '';
        foreach ($progression as $progressionMember) {
            $question .= $progressionMember . ' ';
        }
        $question = trim($question);
        $gameParameters[1][] = [$question, $answer];
        print_r($gameParameters);
        $progression = [];
    }
    
    brainGames($gameParameters);
}
