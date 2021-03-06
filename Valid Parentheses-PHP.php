/**
Problem
=============
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
An input string is valid if:
Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.

Example 1:
------------------
Input: s = "()"
Output: true

Example 2:
------------------
Input: s = "()[]{}"
Output: true

Example 3:
------------------
Input: s = "(]"
Output: false

Code
=================
*/
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $length=strlen($s);
        $last=$length-1;
        $valid=0;
        if($s[0]==')' || $s[0]=='}' || $s[0]==']'){
            $valid=1;
        }elseif($s[$last]=='(' || $s[$last]=='{' || $s[$last]=='['){
            $valid=1;
        }
        for($i=0; $i<$length; $i++){
            if($s[$i]=='(' && $valid!=1){
                if($s[$i+1]=='{' || $s[$i+1]=='[' || $s[$i+1]=='(' || $s[$i+1]==')'){
                    $valid=0;
                }
                else{
                    $valid=1;
                }
            }elseif($s[$i]=='{' && $valid!=1){
                if($s[$i+1]=='(' || $s[$i+1]=='[' || $s[$i+1]=='{' || $s[$i+1]=='}'){
                    $valid=0;
                }
                else{
                    $valid=1;
                }
            }elseif($s[$i]=='[' && $valid!=1){
                if($s[$i+1]=='(' || $s[$i+1]=='{' || $s[$i+1]=='{' || $s[$i+1]==']'){
                    $valid=0;
                }
                else{
                    $valid=1;
                }
            }
        }
        if($valid==0){
            return true;
        }else{
            return false;
        }
    }
}
