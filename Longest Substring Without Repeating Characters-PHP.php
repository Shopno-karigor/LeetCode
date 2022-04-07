/**
Problem
==================
Given a string s, find the length of the longest substring without repeating characters.

Example 1:
-------------------
Input: s = "abcabcbb"
Output: 3
Explanation: The answer is "abc", with the length of 3.

Example 2:
-------------------
Input: s = "bbbbb"
Output: 1
Explanation: The answer is "b", with the length of 1.

Example 3:
-------------------
Input: s = "pwwkew"
Output: 3
Explanation: The answer is "wke", with the length of 3.
Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.

Constraints:
-------------------
0 <= s.length <= 5 * 104
s consists of English letters, digits, symbols and spaces.

Code
=====================
*/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $arr = str_split($s);
        $sub = [];
        $lenth = 1;
        if($arr[0]==""){
            return 0;
        }
        foreach($arr as $i) {          
          $temp = array_search($i,$sub);
          if(array_search($i,$sub) === false) {            
            $sub[] = $i;
            if(count($sub) > $lenth){
              $lenth = count($sub);
            }            
          }else{
            $sub[] = $i;
            $sliced_array = array_slice($sub, $temp+1);
            $sub = $sliced_array;
          }
        }
      return $lenth;
    }
}

Submission details
=====================
Runtime: 67 ms, faster than 40.52% of PHP online submissions for Longest Substring Without Repeating Characters.
Memory Usage: 21.2 MB, less than 14.16% of PHP online submissions for Longest Substring Without Repeating Characters.