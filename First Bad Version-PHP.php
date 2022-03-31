/**
Problem
=====================
You are a product manager and currently leading a team to develop a new product. Unfortunately, the latest version of your product fails the quality check. Since each version is developed based on the previous version, all the versions after a bad version are also bad.
Suppose you have n versions [1, 2, ..., n] and you want to find out the first bad one, which causes all the following ones to be bad.
You are given an API bool isBadVersion(version) which returns whether version is bad. Implement a function to find the first bad version. You should minimize the number of calls to the API.

Example 1:
----------------------
Input: n = 5, bad = 4
Output: 4

Example 2:
---------------------
Input: n = 1, bad = 1
Output: 1

Constraints:
----------------------
1 <= bad <= n <= 231 - 1

Code
=====================
*/
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $low=1;
        $high=$n;
        while($low < $high){
            $mid=$low + floor(($high-$low)/2);
            if($this->isBadVersion($mid)){
                $high=$mid-1;
            }else{
                $low=$mid+1;
            }
        }
        if($this->isBadVersion($low)){
            return $low;
        }
        return $low+1;
    }
}

Submission Details
======================
Runtime: 36 ms, faster than 82.56% of PHP online submissions for First Bad Version.
Memory Usage: 19.3 MB, less than 31.79% of PHP online submissions for First Bad Version.
