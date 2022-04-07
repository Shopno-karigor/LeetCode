/**
Problem
=================
You are given a perfect binary tree where all leaves are on the same level, and every parent has two children. The binary tree has the following definition:

struct Node {
  int val;
  Node *left;
  Node *right;
  Node *next;
}
Populate each next pointer to point to its next right node. If there is no next right node, the next pointer should be set to NULL.

Initially, all next pointers are set to NULL.

Example 1:
----------------
Input: root = [1,2,3,4,5,6,7]
Output: [1,#,2,3,#,4,5,6,7,#]

Example 2:
----------------
Input: root = []
Output: []
 
Constraints:
----------------
The number of nodes in the tree is in the range [0, 212 - 1].
-1000 <= Node.val <= 1000

Code
==================
*/
/**
 * Definition for a Node.
 * class Node {
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->left = null;
 *         $this->right = null;
 *         $this->next = null;
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return Node
     */
    public function connect($root) {
        if ($root->left) {
            $root->left->next = $root->right;
            $this->connect($root->left);
        }
        if ($root->right) {
            $root->right->next = $root->next->left ?? null;
            $this->connect($root->right);
        }
        return $root;
    }
}

Submission details
===================
Runtime: 44 ms, faster than 32.00% of PHP online submissions for Populating Next Right Pointers in Each Node.
Memory Usage: 22.4 MB, less than 100.00% of PHP online submissions for Populating Next Right Pointers in Each Node.