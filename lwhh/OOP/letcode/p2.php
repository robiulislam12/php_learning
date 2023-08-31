<?php 

class Solution {

    function gcdOfStrings($str1, $str2) {
        // Find the lengths of the input strings
        $len1 = strlen($str1);
        $len2 = strlen($str2);

        // Check if the strings are equal
        if ($str1 !== $str2) {
            return "";
        }

        // Find the greatest common divisor of the lengths
        $gcdLength = gcd($len1, $len2);

        // Extract a substring of length gcdLength from str1
        $substring = substr($str1, 0, $gcdLength);

        // Check if the substring divides both strings
        if ($str1 === str_repeat($substring, $len1 / $gcdLength) &&
            $str2 === str_repeat($substring, $len2 / $gcdLength)) {
            return $substring;
        }

        return "";
    }
}

// Helper function to calculate the greatest common divisor
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$ns = new Solution();
$result = $ns->gcdOfStrings("ABCABC", "ABC");
echo $result; // Output: "ABC"
