# 利用对象实现链表
## 单链表初始化类
```php
/**
 * Definition for a singly-linked list.
 */
  class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val) { $this->val = $val; }
  }
  ```
  `2->4->3` 这样一个链表打印出来是这样的
  
 ```php
ListNode Object
(
    [val] => 2
    [next] => ListNode Object
        (
            [val] => 4
            [next] => ListNode Object
                (
                    [val] => 3
                    [next] => 
                )

        )

)
```
## leetcode 上的 问题,实现两个链表数字相加

```
给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。

如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。

您可以假设除了数字 0 之外，这两个数都不会以 0 开头。

示例：

输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
输出：7 -> 0 -> 8
原因：342 + 465 = 807

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/add-two-numbers
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
```
### 分析 
因为本身链表就是逆序的,就直接一位一位加下去就好了,
每位只能存一位数字,要注意进位问题

```php
/**
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
    function addTwoNumbers($l1, $l2) {
        $newLinkedList = new ListNode(0);
        $newTmp = $newLinkedList;
        $l1Tmp = $l1;
        $l2Tmp = $l2;
        $carry = 0;//进位
        do {
            $l1CurrentVal = $l1Tmp->val ?? 0;//链表当前值
            $l2CurrentVal = $l2Tmp->val ?? 0;
            $sum = $l1CurrentVal + $l2CurrentVal + $carry;
            if ($sum >= 10) {//注意阈值,大于等于
                $newTmp->next = new ListNode($sum % 10);
                $carry = 1;
            } else {
                $newTmp->next = new ListNode($sum);
                $carry = 0;//这一步开始漏了,导致进一位之后 carry 永远是 1,内存溢出...
            }
            $newTmp = $newTmp->next;//指针移到下一位 (包括新生成要返回的链表)
            $l1Tmp = $l1Tmp->next ?? null;//指针移到下一位
            $l2Tmp = $l2Tmp->next ?? null;//指针移到下一位

        } while ($l1Tmp || $l2Tmp || $carry);

        return $newLinkedList->next;
    }
```
考虑到不应改变原有链表结构,建立了临时变量
