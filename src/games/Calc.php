<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\brainEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function brainCalc()
{
    $mission = 'What is the result of the expression?';
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operation = $operations[array_rand($operations)];
        $firstNumber = rand(1, 10);
        $secondNumber = rand(1, 20);
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
        $questionsAndAnswers[] = [$question, (string) $answer];
    }
    
    brainEngine($mission, $questionsAndAnswers);
}
