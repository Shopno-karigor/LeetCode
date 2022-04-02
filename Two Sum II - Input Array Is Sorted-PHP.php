/*
Problem
============
Given a 1-indexed array of integers numbers that is already sorted in non-decreasing order, find two numbers such that they add up to a specific target number. Let these two numbers be numbers[index1] and numbers[index2] where 1 <= index1 < index2 <= numbers.length.
Return the indices of the two numbers, index1 and index2, added by one as an integer array [index1, index2] of length 2.
The tests are generated such that there is exactly one solution. You may not use the same element twice.
Your solution must use only constant extra space.

Example 1:
----------------
Input: numbers = [2,7,11,15], target = 9
Output: [1,2]

Example 2:
----------------
Input: numbers = [2,3,4], target = 6
Output: [1,3]

Example 3:
----------------
Input: numbers = [-1,0], target = -1
Output: [1,2]

Constraints:
----------------
2 <= numbers.length <= 3 * 104
-1000 <= numbers[i] <= 1000
numbers is sorted in non-decreasing order.
-1000 <= target <= 1000
The tests are generated such that there is exactly one solution.
                      
Code
================
*/
class Solution {
    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $index = array();
        foreach( $numbers as $key=>$value){
            $temp = $target - $value;
            if(array_key_exists($temp,$index)){
                $OldKey = $index[$temp];$NewKey=$key+1;
                return [$OldKey+1,$NewKey];
            }else{
                $index[$value] = $key;
            }
        }
    }
}
  
Submission result
=================
Runtime: 39 ms, faster than 80.33% of PHP online submissions for Two Sum II - Input Array Is Sorted.
Memory Usage: 22.8 MB, less than 27.05% of PHP online submissions for Two Sum II - Input Array Is Sorted.
