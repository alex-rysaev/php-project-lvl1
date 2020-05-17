<?php

namespace BrainGames\BrainGames;

use function cli\line;
use function cli\prompt;

function brainGames($gameParameters)
{
    $mission = $gameParameters[0];
    $questionsAndAnswers = $gameParameters[1];
    $guess = '';
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
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $guess, $answer);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
    if ($guess == $answer) {
        line("Congratulations, %s!", $name);
    }
}
