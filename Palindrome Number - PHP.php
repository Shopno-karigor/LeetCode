/**
Problem
==================
Given an integer x, return true if x is palindrome integer.
An integer is a palindrome when it reads the same backward as forward.
For example, 121 is a palindrome while 123 is not.

Example 1:
---------------------
Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.

Example 2:
--------------------
Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.

Example 3:
--------------------
Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.

Follow up: Could you solve it without converting the integer to a string?

Code
================
*/
class Solution {
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $length = strlen($x);
        $original = $x;
        $reverse=0;
        $isNegative=0;
        if($x < 0){
            $isNegative=1;
        }    
        for($i=0; $i< $length; $i++){
            $temp = $x%10;
            $reverse=($reverse*10)+$temp;
            $x=floor($x/10);
        }
        if($reverse==$original){
            return true;
        }elseif($isNegative==1){
            return false;
        }else{
            return false;
        }
    }
}
