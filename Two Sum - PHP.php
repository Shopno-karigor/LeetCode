/**
Problem
=====================
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.

Example 1:
--------------------
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

Example 2:
--------------------
Input: nums = [3,2,4], target = 6
Output: [1,2]

Example 3:
--------------------
Input: nums = [3,3], target = 6
Output: [0,1]

Code
================================
*/
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $output=array();     
        for($i=0; $i<sizeof($nums); $i++){
            $temp=$target-$nums[$i];
            for($j=$i+1; $j < sizeof($nums); $j++){
                if($nums[$j]==$temp){
                    $output[0]=$i;
                    $output[1]=$j;
                }
            }
        }
        return $output;
    }
}
