<?php
/* 
	文件上传类
	$_FILES['表单文件名'][5个键值对]
	1.判断错误
	2，判断类型
	3，判断大小
	4，判断是否合法
	5.移动
	5.1后缀名
	5.2目标目录
	5.3拼接目标信息
	5.4移动
	6.返回信息
 */
class Upload
{
	protected $fileName;//表单名
	protected $error;//错误号
	protected $fName;//原文件名
	protected $tmpName;//临时文件名
	protected $size;//文件大小
	protected $type;//文件类型
	protected $allowType;//允许的文件类型
	protected $allowSize;//允许的文件最大大小
	protected $ext;//后缀名
	protected $desDir;//目标目录名
	
	public function __construct($fileName, $desDir,$allowType=['image/jpeg','image/jpg','image/gif','image/png'], $allowSize=1024*1024)
	{
		$this->fileName = $fileName;
		$this->desDir = $desDir;
		$this->fName = $_FILES[$this->fileName]['name'];
		$this->error = $_FILES[$this->fileName]['error'];
		$this->size = $_FILES[$this->fileName]['size'];
		$this->type = $_FILES[$this->fileName]['type'];
		$this->tmpName = $_FILES[$this->fileName]['tmp_name'];
		$this->allowType = $allowType;
		$this->allowSize = $allowSize;
		
		
		
	}
	
	public function init()
	{
		if ($this->getError() && $this->getTy() && $this->getSize() && $this->getAllow()) {
			$this->getExt();
			$this->getDesDir();
			$this->move();
		} else {
			echo '兄弟，出问题了，你重传吧';
		}
	}
	
	/**
	 *@param 判断错误号
	 *
	 *@return bool
	 */
	private function getError()
	{
		if ($this->error) {
			return false;
		} else {
			return true;
		}
	}
	
	/**
	*@param 判断是否允许类型
	*
	*@return bool
	*/
	private function getTy()
	{
		if (in_array($this->type, $this->allowType)) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	*@param 判断是否允许大小
	*
	*@return bool
	*/
	private function getSize()
	{
		if ($this->size > $this->allowSize) {
			return false;
		} else {
			return true;
		}
	}
	
	/**
	*@param 判断是否合法上传
	*
	*@return bool
	**/
	private function getAllow()
	{
		if (is_uploaded_file($this->tmpName)) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	*@param 后缀名截取
	*
	*
	*/
	private function getExt()
	{
		$tmp = explode('.', $this->fName);
		$this->ext = '.' . array_pop($tmp);
	}
	
	/**
	*@param 目标目录检测
	*
	*
	*/
	private function getDesDir()
	{
		//./ ./upload/a/b/c 
		//判断目录是否存在
		if (!file_exists($this->desDir)) {
			mkdir($this->desDir);
		}
		//判断目录结尾是不是/
		if (substr($this->desDir, -1) != '/' ) {
			$this->desDir = $this->desDir . '/';
		}
		
		$this->desInfo = $this->desDir . date('YmdHis') . rand(10000,99999) . $this->ext;
	}
	
	/**
	*@param 移动
	*
	*@return bool
	*/
	private function move()
	{
		if(move_uploaded_file($this->tmpName, $this->desInfo)) {
			echo '上传成功，信息为：<br>', $this->desInfo;
		} else {
			echo '上传失败，请重传';
		}
	}
}	
	
// var_dump($_FILES);
$up = new Upload('pho', './upload/a');
// echo '<pre>';
// var_dump($up);
$up->init();

