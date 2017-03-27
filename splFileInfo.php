<?php
/**
 * SplFileInfo 可以用来获取文件的基本信息，如修改时间，大小。
 * Created by PhpStorm.
 * User: m2ez
 * Date: 2017/3/27
 * Time: 18:17
 */

$file = new SplFileInfo('README.md');
echo 'File is created at ' . date('Y-m-d H:i:s', $file->getCTime()) . PHP_EOL;
echo 'File is modified at ' . date('Y-m-d H:i:s', $file->getMTime()) . PHP_EOL;
echo 'File size is ' . $file->getSize() . ' bytes' . PHP_EOL;

// 读取文件里面的内容
$fileObj = $file->openFile('r');
while($fileObj->valid()){
    echo $fileObj->fgets(); // 读取文件里的一行数据
}

// 关闭打开的文件
$fileObj = null;
$file = null;