<?php

namespace BrainGames\BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\BraiCalc\brainCalc;
use function BrainGames\BrainEven\brainEven;

function brainGames($name, $gameType)
{
    $answerAndGuess = [];
    for ($i = 0; $i < 3; $i++) {
        switch ($gameType) {
            case 'brainEven':
                $answerAndGuess = brainEven();
                break;
            case 'brainCalc':
                $answerAndGuess = brainCalc();
                break;
        }
        if (!($answerAndGuess[0] === $answerAndGuess[1])) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answerAndGuess[0], $answerAndGuess[1]);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
    if ($answerAndGuess[0] === $answerAndGuess[1]) {
        line("Congratulations, %s!", $name);
    }
}
