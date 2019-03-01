<?php
namespace app\demo\controller;
use think\Controller;
use think\Db;
class Form extends Controller
{  
	//主页面
	public function index()
    {
		$info = Db::name('test')->select();
		$this->assign('info',$info);
	    return $this->fetch();
    }

	// add页面
    public function add()
    {
    if(request()->isPost()){
        $data=input('post.');、  
       
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
            if(db('test')->insert($data)){
                return $this->success('添加TP成功!');
            }else{
                return $this->error('添加TP失败!');
            }
            return;
        }
         return view();
    }

        
}