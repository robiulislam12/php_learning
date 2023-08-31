<?php

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $w1arr = str_split($word1);
        $w2arr = str_split($word2);
        $merged = "";
        $len1 = count($w1arr);
        $len2 = count($w2arr);
        $maxLength = max($len1, $len2);

        for($i = 0; $i<= $maxLength; $i++){
            if ($i < $len1) {
                $merged .= $w1arr[$i];
            }
            if ($i < $len2) {
                $merged .= $w2arr[$i];
            }
        }

        return $merged;
    }
}


$ns = new Solution();
$result = $ns->mergeAlternately("abcd", "pq");

echo $result;
