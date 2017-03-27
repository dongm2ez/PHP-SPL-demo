<?php
/**
 * spl 文件迭代器示例
 * Created by PhpStorm.
 * User: m2ez
 * Date: 2017/3/27
 * Time: 17:09
 */
$fSI = new FileSystemIterator('.');
/** @var FileSystemIterator $fInfo */

// 模拟 windows dir
foreach ($fSI as $fInfo) {
    printf("%8s%8s%8s %8s\n",
        date("Y-m-d H:i:s", $fInfo->getMtime()),
        $fInfo->isDir() ? '<DIR>' : '',
        number_format($fInfo->getSize()),
        $fInfo->getFileName()
    );
}

// 模拟 linux ls
foreach ($fSI as $fInfo) {
    printf("%8s  ",
        $fInfo->getFileName()
    );
}