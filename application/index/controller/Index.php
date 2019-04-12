<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Response;
use think\Db;
                                              											
class Index extends Controller
{
	public function _initialize()
	{


	}
	// 模块默认访问函数
	public function index(Request $request)						
	{	
		// --- 查找数据
		// $res = Db::execute("insert into _luozhou_user set username=?,password=?,email=?",[
		// 	'laowei',
		// 	md5(123456),
		// 	'laowei@qq.com'
		// ]);
		
		// $res = Db::query("select * from _luozhou_user where id=?",[1]);
	
		// $res = Db::table('_luozhou_user')->where([
		// 	'id'=>1
		// ])->value('username');
		
		// $res = Db::table('_luozhou_user')->where([
		// 	'id'=>1
		// ])->select();
		
		// $res = Db::table('_luozhou_user')->where([
		// 	'id'=>1
		// ])->column('email','username');
		
		// $res = Db::name('user')->where([
		// 	'id'=>1
		// ])->column('email','username');

		// $res = db('user',[],false)->where([
		// 	'id'=>1
		// ])->column('email','username');
		
		// --- 插入数据
		// $res = Db::name('user')->insert([
		// 	'email'		=>'luoxin@qq.com',
		// 	'password'	=>md5(123456),
		// 	'username'	=>'luoxin'
		// ]);
		

		// $res = Db::name('user')->insertGetId([
		// 	'email'		=>'luoxin@qq.com',
		// 	'password'	=>md5(123456),
		// 	'username'	=>'luoxin'
		// ]);
		
		// $res = Db::name('user')->insertAll([
		// 	[
		// 		'email'		=>'luoxin1@qq.com',
		// 		'password'	=>md5(123456),
		// 		'username'	=>'luoxin1'
		// 	],
		// 	[
		// 		'email'		=>'luoxin2@qq.com',
		// 		'password'	=>md5(123456),
		// 		'username'	=>'luoxin2'
		// 	]
		// ]);

		// update 批量修改数据
		// $res = Db::name('user')->where([
		// 	'id'		=>8
		// ])->update([
		// 	'username'	=>"luoxin12"
		// ]);

		// setInc 自增函数
		// $res = Db::name('user')->where([
		// 	'id'		=>1,
		// ])->setInc('sex');

		// setDec 自减函数
		// $res = Db::name('user')->where([
		// 	'id'		=>1
		// ])->setDec('sex');

		// 删除数据
		// $res = Db::name('user')->where([
		// 	'id'		=>7	
		// ])->delete();
		// 条件查询语句运算符关键词
		// EQ[=] 	等于
		// ENQ[<>]	不等于
		// LT[<]	小于
		// ELT[<=]	小于等于
		// GT[>]	大于
		// EGT[>=]	大于等于
		// BETWEEN[BETWEEN * AND *]	范围
		// NOTBETWEEN[NOTBETWEEN * AND *] 范围取反
		// IN[IN (*,*)]		包含
		// NOTIN[NOT IN (*,*)] 	不包含

		// dump($res);
		$data["code"] = 200;
        $data["message"] = "第一个请求";
        $data["data"] = Request()->post('id');

		
		header('Content-Type:application/x-www-form-urlencoded;charset=UTF-8');
		header('Access-Control-Allow-Origin:*');
		
        return $data;
	}
	public function login()	
	{

		$data['code'] = 200; 
		$data['data'] = md5(Request()->post('username'));
		$data['message'] = '登陆成功';
		

		header('Content-Type:application/x-www-form-urlencoded;charset=UTF-8');
		header('Access-Control-Allow-Origin:*');
		
		return $data;
	}
}