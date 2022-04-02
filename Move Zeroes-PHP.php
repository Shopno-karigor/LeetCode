/**
Problem
==============
Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Note that you must do this in-place without making a copy of the array.

Example 1:
-----------------
Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]

Example 2:
-----------------
Input: nums = [0]
Output: [0]
 
Constraints:
-----------------
1 <= nums.length <= 104
-231 <= nums[i] <= 231 - 1

Code
===============
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $count=count($nums);
        for($i=0;$i<count($nums);$i++){
            if($nums[$i]==0){
                unset($nums[$i]);
                array_push($nums,0);
            }
        }
        return $nums;
    }
}
                                        
Submission details
===================
Runtime: 62 ms, faster than 67.96% of PHP online submissions for Move Zeroes.
Memory Usage: 22 MB, less than 23.30% of PHP online submissions for Move Zeroes.
