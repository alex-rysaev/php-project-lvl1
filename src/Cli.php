<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

function run($gameType)
{
    line();
    line('Welcome to the Brain Games!');
    line();
    switch ($gameType) {
        case 'brainEven':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'brainCalc':
            line('What is the result of the expression?');
            break;
        case 'brainGCD':
            line('Find the greatest common divisor of given numbers.');
            break;
        case 'brainProgression':
            line('What number is missing in the progression?');
            break;
        case 'brainPrime':
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
    }
    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    brainGames($name, $gameType);
}
