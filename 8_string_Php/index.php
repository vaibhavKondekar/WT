<?php
// Sample strings
$string1 = "Hello";
$string2 = "World";

// 1. Concatenation
$concatenatedString = $string1 . " " . $string2;
echo "Concatenated String: " . $concatenatedString . "<br>";

// 2. String Length
$stringLength = strlen($concatenatedString);
echo "Length of the concatenated string: " . $stringLength . "<br>";

// 3. Finding a substring
$findSubstring = "World";
if (strpos($concatenatedString, $findSubstring) !== false) {
    echo "The substring '$findSubstring' is found in the string.<br>";
} else {
    echo "The substring '$findSubstring' is not found in the string.<br>";
}

// 4. Replacing part of a string
$replacedString = str_replace("World", "PHP", $concatenatedString);
echo "String after replacement: " . $replacedString . "<br>";

// 5. Reversing a string
$reversedString = strrev($concatenatedString);
echo "Reversed String: " . $reversedString . "<br>";
?>
