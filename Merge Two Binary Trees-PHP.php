/**
Problem
=================
You are given two binary trees root1 and root2.
Imagine that when you put one of them to cover the other, some nodes of the two trees are overlapped while the others are not. You need to merge the two trees into a new binary tree. The merge rule is that if two nodes overlap, then sum node values up as the new value of the merged node. Otherwise, the NOT null node will be used as the node of the new tree.
Return the merged tree.

Note: The merging process must start from the root nodes of both trees.

Example 1:
------------------
Input: root1 = [1,3,2,5], root2 = [2,1,3,null,4,null,7]
Output: [3,4,5,5,4,null,7]

Example 2:
------------------
Input: root1 = [1], root2 = [1,2]
Output: [2,2]
 
Constraints:
------------------
The number of nodes in both trees is in the range [0, 2000].
-104 <= Node.val <= 104

Code
==============
*/
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */
    function mergeTrees($root1, $root2) {
        if($root1 == NULL) return $root2;
        if($root2 == NULL) return $root1;
        $temp = $root1->val + $root2->val;
        $mergeTree = new TreeNode($temp);
        $mergeTree->left = $this->mergeTrees($root1->left, $root2->left);
        $mergeTree->right = $this->mergeTrees($root1->right, $root2->right);
        return $mergeTree;
    }
}

Submission details
===================
Runtime: 53 ms, faster than 17.86% of PHP online submissions for Merge Two Binary Trees.
Memory Usage: 19.9 MB, less than 64.29% of PHP online submissions for Merge Two Binary Trees.