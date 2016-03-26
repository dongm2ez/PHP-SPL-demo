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
$obj = new SplDoublyLinkedList();
$obj->push(1);// 把新的节点数据添加到链表的顶部（Top）
$obj->push(2);
$obj->push(3);
$obj->unshift(10);// 把新的节点数据添加到链表底部（Bottom）
print_r($obj);