<?php
/**
 * spl堆栈示例
 * Created by PhpStorm.
 * User: M2ez
 * Date: 2016/3/29
 * Time: 17:50
 * E-mail：dongm2ez@163.com
 * webSite: http://www.m2ez.com
 */

$stack = new SplStack();
$stack->push('a');// 向堆栈里压入一个元素
$stack->push('b');
$stack->push('c');
print_r($stack);

echo 'Bottom: ' . $stack->bottom() . "\n\r";
echo 'Top: ' . $stack->top() . "\n\r";

$stack->offsetSet(0, 'C');// 堆栈的offset=0是Top所在的位置，offset=1是Top位置节点靠近Bottom位置的相邻节点，以此类推
print_r($stack);

$stack->rewind();// 双向链表的rewind和堆栈的rewind相反，堆栈的rewind指向Top，双向链表的rewind指向Bottom
echo 'current:' . $stack->current() . "\n\r";
$stack->next();// 双向链表next指向靠近Top的下一个节点，而堆栈指向靠近Bottom的下一个节点
echo 'current:' . $stack->current() . "\n\r";

// 遍历堆栈
$stack->rewind();
while($stack->valid())
{
    echo $stack->key() . '=>' . $stack->current() . "\n\r";
    $stack->next();// next不删除元素
}

// 弹出堆栈中的元素
$popObj = $stack->pop();// 提取出最后一个元素
echo 'Poped object:' . $popObj . "\n\r";
print_r($stack);
