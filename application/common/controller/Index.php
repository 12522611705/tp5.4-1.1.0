<?php 
namespace app\common\controller;
class Index
{
	public function index()
	{
		return '我是common';
	}
	public function showName($name)
	{
		return $name;
	}
}

