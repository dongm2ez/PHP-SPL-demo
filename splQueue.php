<?php
/**
 * spl队列示例
 * Created by PhpStorm.
 * User: M2ez
 * Date: 2016/3/31
 * Time: 10:48
 * E-mail：dongm2ez@163.com
 * webSite: http://www.m2ez.com
 */
$obj = new SplQueue();
$obj->enqueue('a');// enqueue 进入队列
$obj->enqueue('b');
$obj->enqueue('c');
print_r($obj);

$obj->offsetSet(0, 'A');// 队列中offset=0是Bottom位置开始，offset=1是Top方向的相邻节点，以此类推
print_r($obj);

$obj->rewind();// 队列中rewind使指针指向Bottom位置
echo 'current:' . $obj->current() . "\n\r";

while($obj->valid())
{
    echo $obj->key() . '=>' . $obj->current() . "\n\r";
    $obj->next();
}