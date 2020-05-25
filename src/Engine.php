<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function brainEngine($mission, $questionsAndAnswers)
{

    $guess = null;
    line('Welcome to the Brain Games!');
    line("%s", $mission);
    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    foreach ($questionsAndAnswers as [$question, $answer]) {
        line("Question: %s", $question);
        $guess = prompt("Your answer");
        if ($guess !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $guess, $answer);
            line("Let's try again, %s!", $name);
            return false;
        }
    }

    line("Congratulations, %s!", $name);
    return true;
}
