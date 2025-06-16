<?php


$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $string) {
    $count = 0;
    $name = strtolower($string);
    for ($i = 0; $i < strlen($name); $i++) {
        if (in_array($name[$i], ["a", "e", "i", "o", "u"])) {
            $count++;
        }
    }

    echo "Original String: " . $string . ", Vowel Count: " . $count . ", Reversed String: " . strrev($string) . "<br>";
}
