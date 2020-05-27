<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

function brainCalc()
{
    $mission = 'What is the result of the expression?';
    
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomKey = array_rand($operations);
        $operation = $operations[$randomKey];
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
        $answer = (string) $answer;
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $questionsAndAnswers[] = [$question, $answer];
    }
    
    engine($mission, $questionsAndAnswers);
}
