/**
Problem
==============
Given the head of a linked list, remove the nth node from the end of the list and return its head.

Example 1:
------------------
Input: head = [1,2,3,4,5], n = 2
Output: [1,2,3,5]

Example 2:
------------------
Input: head = [1], n = 1
Output: []

Example 3:
------------------
Input: head = [1,2], n = 1
Output: [1]
 
Constraints:
------------------
The number of nodes in the list is sz.
1 <= sz <= 30
0 <= Node.val <= 100
1 <= n <= sz

Code
======================
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        if ($head->next == null) {
            return null;
        }
        $i = 1;
        $temp = $head;
        while ($temp->next != null) {
            $temp = $temp->next;
            $i++;
        }
        $index = $i - $n;
        if ($index === 0) {
            if ($head->next == null) {
                return null;
            } else {
                $head = $head->next;
            }
            return $head;
        }
        $i = 1;
        $res = $head;
        while ($i < $index) {
            $res = $res->next;
            $i++;
        }
        if ($res->next != null) {
            if ($res->next->next != null) {
                $res->next = $res->next->next;
            } else {
                $res->next = null;
            }
        }
        return $head;
    }
}

Submission details
======================
Runtime: 9 ms, faster than 67.97% of PHP online submissions for Remove Nth Node From End of List.
Memory Usage: 18.5 MB, less than 100.00% of PHP online submissions for Remove Nth Node From End of List.