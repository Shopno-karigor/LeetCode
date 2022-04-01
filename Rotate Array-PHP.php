/**
Problem
==============
Given an array, rotate the array to the right by k steps, where k is non-negative.

Example 1:
--------------
Input: nums = [1,2,3,4,5,6,7], k = 3
Output: [5,6,7,1,2,3,4]

Example 2:
--------------
Input: nums = [-1,-100,3,99], k = 2
Output: [3,99,-1,-100]
 
Constraints:
--------------
1 <= nums.length <= 105
-231 <= nums[i] <= 231 - 1
0 <= k <= 105

Code
==============
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $count=count($nums);
        $k = $k%$count;
        $temp = array_splice($nums, ($count-$k));
        $nums = array_merge($temp,$nums);
    }
}

Submission details
================
Runtime: 110 ms, faster than 33.15% of PHP online submissions for Rotate Array.
Memory Usage: 30.7 MB, less than 72.19% of PHP online submissions for Rotate Array.
