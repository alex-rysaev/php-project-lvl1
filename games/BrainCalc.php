<?php

namespace BrainGames\BrainCalc;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 == 0;
}

function brainCalc()
{
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
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
    line("Question: %s %s %s", $firstNumber, $operation, $secondNumber);
    $guess = prompt('Your answer');
    $answerAndGuess = [(integer) $answer, (integer) $guess];
    return $answerAndGuess;

}