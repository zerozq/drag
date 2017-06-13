<?php
# @ Composer 自动加载器
require 'vendor/autoload.php';
# @ Whoops 组件
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\JsonResponseHandler);
//$whoops->pushHandler(new \Whoops\Handler\XmlResponseHandler);
$whoops->register();
# @ PHPexcel 函数类调用
if( $_POST['EXCEL'] )
{
	$objPHPExcel = APHPExcel_IOFactory::load($_POST['EXCEL']);
	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	# @	输出结果
	var_dump($sheetData);
}
?>