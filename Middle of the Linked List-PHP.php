/**
Problem
============
Given the [head] of a singly linked list, return the middle node of the linked list.

If there are two middle nodes, return the second middle node.

Example 1:
----------------------
Input: head = [1,2,3,4,5]
Output: [3,4,5]
Explanation: The middle node of the list is node 3.

Example 2:
----------------------
Input: head = [1,2,3,4,5,6]
Output: [4,5,6]
Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.

Constraints:
----------------------
The number of nodes in the list is in the range [1, 100].
1 <= Node.val <= 100

Code
==============
*/
/**
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
     * @return ListNode
     */
    function middleNode($head) {
        $temp = [];
        while ($head !== null) {
            $temp[] = $head;
            $head = $head->next;
        }
        return $temp[floor(count($temp)/2)];
    }
}

Submission details
=====================
Runtime: 26 ms, faster than 5.63% of PHP online submissions for Middle of the Linked List.
Memory Usage: 19.2 MB, less than 70.42% of PHP online submissions for Middle of the Linked List.