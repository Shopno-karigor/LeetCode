/**
Problem
=============
Write a function that reverses a string. The input string is given as an array of characters s.
You must do this by modifying the input array in-place with O(1) extra memory.

Example 1:
--------------
Input: s = ["h","e","l","l","o"]
Output: ["o","l","l","e","h"]

Example 2:
--------------
Input: s = ["H","a","n","n","a","h"]
Output: ["h","a","n","n","a","H"]
 
Constraints:
--------------
1 <= s.length <= 105
s[i] is a printable ascii character.

Code
=============
*/
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $n = count($s);
        $revArray = $s;
        $revIndex=0;
        for($i=$n; $i > 0; $i-- ){
            $s[$revIndex]=$revArray[$i-1];
                $revIndex++;
        }
        return $s;
    }
}

Submission details
===================
Runtime: 72 ms
Memory Usage: 40.3 MB
