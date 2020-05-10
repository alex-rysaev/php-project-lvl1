<?php

namespace BrainGames\BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainCalc\brainCalc;
use function BrainGames\BrainEven\brainEven;
use function BrainGames\BrainGCD\brainGCD;

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
            case 'brainGCD':
                $answerAndGuess = brainGCD();
                break;
        }
        if (!($answerAndGuess[0] === $answerAndGuess[1])) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answerAndGuess[1], $answerAndGuess[0]);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
    if ($answerAndGuess[0] === $answerAndGuess[1]) {
        line("Congratulations, %s!", $name);
    }
}
