<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 转换字节
 * @param $bytes 传入字节数值
 * @param int $decimals
 * @return string BKMGTP
 */
//function human_filesize($bytes, $decimals = 2) {
//  $sz = 'BKMGTP';
//  $factor = floor((strlen($bytes) - 1) / 3);
//  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
//}

///**
// * 删除该目录以及该目录下面的所有文件和文件夹
// * @param $dir 目录
// * @return bool
// */
//function removeDir($dirName) {
//  //判断传入参数是否目录，如不是执行删除文件
//  if (!is_dir($dirName)) {
//      //删除文件
//      @unlink($dirName);
//  }
//  //如果传入是目录，使用@opendir将该目录打开，将返回的句柄赋值给$handle
//  $handle = @opendir($dirName);
//  //这里明确地测试返回值是否全等于（值和类型都相同）FALSE
//  //否则任何目录项的名称求值为 FALSE 的都会导致循环停止（例如一个目录名为“0”）
//  while (($file = @readdir($handle)) !== false) {
//      //在文件结构中，都会包含形如“.”和“..”的向上结构
//      //但是它们不是文件或者文件夹
//      if ($file != '.' && $file != '..') {
//          //当前文件$dir为文件目录+文件
//          $dir = $dirName . '/' .$file;
//          //判断$dir是否为目录，如果是目录则递归调用reMoveDir($dirName)函数
//          //将其中的文件和目录都删除；如果不是目录，则删除该文件
//          is_dir($dir) ? removeDir($dir) : @unlink($dir);
//      }
//  }
//  closedir($handle);
//  return rmdir($dirName);
//}