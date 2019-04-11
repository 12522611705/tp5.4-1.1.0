<?php
namespace app\index\controller;
												
use app\common\controller\Index as commonIndex;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
                                              											
class Index extends Controller
{
	// 模块其它函数执行之前执行这个函数
	// public function __construct()
	// {
	// 	// 第一个值key，第二个值value，第三个值作用域
	// 	config('before', '123456', 'index');
	// }
	// 模块默认访问函数
	public function index(Request $request)						
	{			
		// $res = Config::get('before','index');		
		// $env = Env::get('email');
		// $request = request();						
		// dump($request->param());
		// dump($request->get());
		// dump($request->isPost());
		// dump($request->isGet());
		// session('name','luozhou');
		// dump($request->session());
		// cookie('email','978676938@qq.com');
		// dump($request->cookie());
		// dump($request->cookie('email'));
		
		// $res = [
		// 	'code'  => 200,
		// 	'result'  => [
		// 		'list'	=>  [1,2,3,4]
		// 	]
		// ];
		// return $res; 
		
		$this->assign('key','value');
		$this->view->key2 = 'value2';
		return view('index',[
			'email' 	=>'978676938@qq.com',
			'time'		=>time()
		],[
			'STATIC'	=>'我是替换文本',
			'static'	=>'我是static',
		]);
		   
		// return $this->display('这个{$php}',[
		// 	'php' 	=>'php是世界上最好的语言'
		// ]);
		

		// return $this->fetch('index',[
		// 	'email'		=>'978676938@qq.com',
		// ],[
		// 	'STATIC'	=>'替换文本'
		// ]);
	}
	// 模块可访问函数 
	// public function common()	
	// {	
	// 	// return '11111';
	// 	$common = new commonIndex();
	// 	return $common->index();
	// }
	public function info($id)
	{
		return $id;
	}
	public function demo()
	{
		return "demo";
	}
}