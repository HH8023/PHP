<?php
/* 
	后台首页控制器
 */
class Index
{
	public function showIndex()
	{
		// require '../../view/admin/showIndex.html';//注意：不是从控制器的目录算起
		
		require './view/admin/showIndex.html';
	
	}
	
	public function showTop()
	{
		require './view/admin/top.html';
	}
	public function showLeft()
	{
		require './view/admin/left.html';
	}
	public function showMain()
	{
		require './view/admin/main.html';
	}
	public function showSwich()
	{
		require './view/admin/swich.html';
	}
	public function showBottom()
	{
		require './view/admin/bottom.html';
	}
	
}




