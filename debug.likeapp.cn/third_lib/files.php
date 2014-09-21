<?php

/**
 *
 * @Title: create_php_file
 * @Description: 创建 php 文件
 * @param @param 文件路径 $path
 * @param @param 文件内容 $content
 * @param @param 文件名称 $name
 * @return return_type
 * @throws
 */
function create_php_file($path, $name, $content){
	$fp = fopen($filename, "w+");//打开文件指针，创建文件
	if (!is_writable($name)){
		die("文件：".$name."不可写，请检查!");
	}
	
	fclose($fp);//关闭指针
}