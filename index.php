<?php
declare(strict_types=1);

function fizzbuzz(int $number) {
        $isFizz = $number % 3 == 0;
        $isBuzz = $number % 5 == 0;
        $fizzBuzz = ($isFizz ? 'fizz' : '') . ($isBuzz ? 'buzz' : '');
        return  !empty($fizzBuzz) ? $fizzBuzz : (string)$number;
}

?>