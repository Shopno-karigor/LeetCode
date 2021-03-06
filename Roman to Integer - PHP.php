/**
Problem
===============================
Roman to Integer
Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
For example, 2 is written as II in Roman numeral, just two one's added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9. 
X can be placed before L (50) and C (100) to make 40 and 90. 
C can be placed before D (500) and M (1000) to make 400 and 900.

Example 1:
-----------------------
Input: s = "III"
Output: 3
Explanation: III = 3.

Example 2:
-----------------------
Input: s = "LVIII"
Output: 58
Explanation: L = 50, V= 5, III = 3.

Example 3:
-----------------------
Input: s = "MCMXCIV"
Output: 1994
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.

PHP Code
================================
*/
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $Integer=0;
        //Main for loop
        for ($i=0; $i<strlen($s); $i++){
            if($s[$i]=="I"){
                if($s[$i+1]=="V"){
                    $Integer=$Integer+4;
                    $i=$i+1;
                }
                elseif($s[$i+1]=="X"){
                    $Integer=$Integer+9;
                    $i=$i+1;
                }
                else{
                    $Integer=$Integer+1;
                }
            }
            elseif($s[$i]=="V"){
                $Integer=$Integer+5;
            }
            elseif($s[$i]=="X"){
                if($s[$i+1]=="L"){
                    $Integer=$Integer+40;
                    $i=$i+1;
                }
                elseif($s[$i+1]=="C"){
                    $Integer=$Integer+90;
                    $i=$i+1;
                }
                else{
                    $Integer=$Integer+10;
                }
            }
            elseif($s[$i]=="L"){
                $Integer=$Integer+50;
            }
            elseif($s[$i]=="C"){
                if($s[$i+1]=="D"){
                    $Integer=$Integer+400;
                    $i=$i+1;
                }
                elseif($s[$i+1]=="M"){
                    $Integer=$Integer+900;
                    $i=$i+1;
                }
                else{
                    $Integer=$Integer+100;
                }
            }
            elseif($s[$i]=="D"){
                $Integer=$Integer+500;
                echo $Integer."-".$i.",";
            }
            elseif($s[$i]=="M"){
                $Integer=$Integer+1000;               
            }
        }
        //End main for loop
        return $Integer;
    }   
}
