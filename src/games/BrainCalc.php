<?php

namespace BrainGames\BrainCalc;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainGames\brainGames;

function brainCalc()
{
    $mission = 'What is the result of the expression?';
    $gameParameters = [$mission];
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $operation = $operations[array_rand($operations)];
        $firstNumber = rand(1, 10);
        $secondNumber = rand(1, 20);
        $answer = 0;
        switch ($operation) {
            case '+':
                $answer = $firstNumber + $secondNumber;
                break;
            case '-':
                $answer = $firstNumber - $secondNumber;
                break;
            case '*':
                $answer = $firstNumber * $secondNumber;
                break;
        }
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $gameParameters[1][] = [$question, (string) $answer];
    }
    
    brainGames($gameParameters);
}
