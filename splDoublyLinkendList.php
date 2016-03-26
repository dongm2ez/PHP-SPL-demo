<?php
/**
 * spl双向链表示例
 * Created by PhpStorm.
 * User: M2ez
 * Date: 2016/3/26
 * Time: 21:35
 * E-mail：dongm2ez@163.com
 * webSite: http://www.m2ez.com
 */

/*
 * 双向链表指针可以任意向前向后移动
 * rewind：使链表的当前指针指向链表的底部（头部）
 * push：向链表的顶部（尾部）插入一个节点
 * pop：获取链表中的顶部（尾部）节点，并且从链表中删除这个节点；操作不改变当前指针的位置
 * current：指向链表当前节点的指针，必须在调用之前先调用rewind。当指向的节点被删除之后，会指向一个空节点
 * next：让链表当前节点的指针指向下一个节点，current的返回值随之改变
 * unshift：向链表的底部（头部）插入一个节点
 * shift：删除一个链表底部（头部）节点
 * bottom：获取链表底部（头部）元素，当前指针位置不变
 * top：获取链表顶部（尾部）元素，当前指针位置不变
 */
$obj = new SplDoublyLinkedList();
$obj->push(1);// 把新的节点数据添加到链表的顶部（Top）
$obj->push(2);
$obj->push(3);
$obj->unshift(10);// 把新的节点数据添加到链表底部（Bottom）
print_r($obj);
# rewind 和 current 搭配使用,不然为current指向无效值
$obj->rewind();// rewind 用于把节点指针指向Bottom节点
echo 'current:' . $obj->current() . "\n\r";// 获取节点指针指向的节点（当前节点）
$obj->next();// 指针向下移动1位（靠近Top方向）
echo 'next:' . $obj->current() . "\n\r";
$obj->next();
$obj->next();
$obj->prev(); // 指针向上移动1位（靠近Bottom方向）
echo 'prev:' . $obj->current() . "\n\r";
$obj->next();
$obj->next();
echo 'current:' . $obj->current() . "\n\r";// 此时会出现链表越界
if($obj->current())// 可以直接用current判断指针是否有效
    echo "Current node valid\n\r";
else
    echo "Current node invalid\n\r";

$obj->rewind();
if($obj->valid())// 如果当前节点是有效节点，valid返回true
    echo "valid list\n\r";
else
    echo "invalid list\n\r";

echo 'pop value:' . $obj->pop() . "\n\r"; // 从链表Top删除一个元素
print_r($obj);
echo 'current:' . $obj->current() . "\n\r";// pop操作不影响current
$obj->next();// 1
$obj->next();// 2
echo 'pop value:' . $obj->pop() . "\n\r"; // 从链表Top删除一个元素
echo 'current:' . $obj->current() . "\n\r";// 此时指针指向的是删除的元素，current无效值

print_r($obj);
echo 'shift value:' . $obj->shift() . "\n\r";// 把Bottom位置的节点从链表删除，并返回
print_r($obj);