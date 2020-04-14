<?php

$input = file_get_contents('input.txt');
$inputLines = explode("\n", $input);

for ($i = 0; $i < count($inputLines); $i++) {
    $characters = getCharactersFromLine($i);

    for ($j = 0; $j < count($characters); $j++) {
        $character = $characters[$j];
        if ($j + 1 < count($characters) && $i + 1 < count($inputLines)) {
            $nextLineCharacters = getCharactersFromLine($i + 1);

            $nextCharacter = $characters[$j + 1];
            $nextLineCharter = $nextLineCharacters[$j];
            $nextLineNextCharter = $nextLineCharacters[$j + 1];

            if ($character === $nextCharacter && $character === $nextLineCharter && $character === $nextLineNextCharter) {
                $nextSecondLineCharacters = getCharactersFromLine($i + 2);

                $nextSecondCharacter = $characters[$j + 2];
                $nextSecondLineCharter = $nextLineCharacters[$j];
                $nextSecondLineNextCharter = $nextLineCharacters[$j + 2];
                if ($character === $nextSecondCharacter && $character === $nextSecondLineCharter && $character === $nextSecondLineNextCharter) {
                    $nextThirdLineCharacters = getCharactersFromLine($i + 2);

                    $nextThirdCharacter = $characters[$j + 2];
                    $nextThirdLineCharter = $nextLineCharacters[$j];
                    $nextThirdLineNextCharter = $nextLineCharacters[$j + 2];
                    if ($character === $nextThirdCharacter && $character === $nextThirdLineCharter && $character === $nextThirdLineNextCharter) {
                        $lineReadable = $i + 1;
                        $characterReadable = $j + 1;
                        echo 'found square at line ' . $lineReadable . ' and character ' . $characterReadable . ' with a size of 5x5';
                        echo PHP_EOL;
                    } else {
                        $lineReadable = $i + 1;
                        $characterReadable = $j + 1;
                        echo 'found square at line ' . $lineReadable . ' and character ' . $characterReadable . ' with a size of 3x3';
                        echo PHP_EOL;
                    }
                } else {
                    $lineReadable = $i + 1;
                    $characterReadable = $j + 1;
                    echo 'found square at line ' . $lineReadable . ' and character ' . $characterReadable . ' with a size of 2x2';
                    echo PHP_EOL;
                }
            }
        }
    }
}

function getCharactersFromLine($lineNumber)
{
    $input = file_get_contents('input.txt');
    $lines = explode("\n", $input);

    $line = $lines[$lineNumber];
    $characters = str_split($line);
    return $characters;
}