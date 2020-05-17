<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainEven()
{
    $mission = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameParameters = [$mission];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $answer = isEven($number) ? 'yes' : 'no';
        $gameParameters[1][] = [$question, $answer];
    }
    
    brainGames($gameParameters);
}
