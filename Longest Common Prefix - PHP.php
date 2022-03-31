/**
Problem
======================
Write a function to find the longest common prefix string amongst an array of strings.
If there is no common prefix, return an empty string "".

Example 1:
---------------------
Input: strs = ["flower","flow","flight"]
Output: "fl"

Example 2:
---------------------
Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.

Code
======================
*/
class Solution {
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix=$strs[0];
        for($i=1; $i <= sizeof($strs); $i++){
            if(strlen($strs[$i-1]) == 0){
                return "";
            }else{
                //echo $prefix.",".strlen($prefix)."/";
                for($j=0; $j < strlen($prefix); $j++){
                    echo $prefix[$j].",".$strs[$i][$j]."/";
                    if($prefix[$j]==$strs[$i][$j]){
                        $prefix[$j]=$strs[$i][$j];
                    }
                }
                echo $prefix;
            }
            //echo $prefix."/";
        }
        if(strlen($prefix)==0){
            return "";
        }else{
            return $prefix;
        }
    }
}
