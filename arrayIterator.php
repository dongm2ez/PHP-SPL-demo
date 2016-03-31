<?php
/**
 * Created by PhpStorm.
 * User: M2ez
 * Date: 2016/3/31
 * Time: 11:19
 * E-mail：dongm2ez@163.com
 * webSite: http://www.m2ez.com
 */

$fruits = array(
    'apples'=>'apple value',
    'orange'=>'orange value',
    'grape'=>'grape value',
    'plum'=>'plum value'
);
print_r($fruits);

// 直接遍历
echo "*****use fruits directly\n\r";
foreach ($fruits as $key=>$val)
{
    echo $key . ':' . $val . "\n\r";
}

// 使用ArrayIterator遍历数组
echo "*****use fruits ArrayIterator in for\n\r";
$obj = new ArrayObject($fruits);
$it = $obj->getIterator();
foreach ($it as $key=>$val)
{
    echo $key . ':' . $val . "\n\r";
}

// 使用while对数组进行遍历
echo "*****use fruits ArrayIterator in while\n\r";
$it->rewind();
while ($it->valid())
{
    echo $it->key() . ':' . $it->current() . "\n\r";
    $it->next();
}

// 跳过某些元素进行打印
echo "*****use seek before while\n\r";
$it->rewind();
if($it->valid())
{
    $it->seek(1);
    while($it->valid())
    {
        echo $it->key() . ':' . $it->current() . "\n\r";
        $it->next();
    }
}

// key排序
echo "*****use ksort\n\r";
$it->ksort();// 对key进行字典序排序
foreach ($it as $key=>$val)
{
    echo $key . ':' . $val . "\n\r";
}

// value排序
echo "*****use asort\n\r";
$it->asort();// 对value进行字典序排序
foreach ($it as $key=>$val)
{
    echo $key . ':' . $val . "\n\r";
}