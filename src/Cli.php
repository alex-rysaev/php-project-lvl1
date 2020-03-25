<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\BrainEven\brainEven;

function run()
{
    line();
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    brainEven($name);
}
