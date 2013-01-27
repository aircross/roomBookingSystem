<?php
// 后台登陆界面
class AdminAction extends Action {

    public function applyedit(){
        $name=session('name');
        $this->assign('name',$name);

        $order = M('order');

        $roomApplyed = $order->where('state=2')->order('useDate asc,startTime asc')->select();
        $this->assign('roomApplyed',$roomApplyed);
        //dump($roomApplyed);

        $this->display();
    }







    public function userMgr(){
    	$delId=$_GET['_URL_'][3];
    	$action=$_GET['_URL_'][2];
    	//如果url带del的id参数
    	if($delId){
    		$data['id']=$delId;
    		$user=M('user');
    		if($result=$user->where($data)->delete()){
    			$this->success('删除成功');
    		}
    		else{$this->error('出错');}

    	}
    	//url带动作参数
    	else if($action=='edit'){
    		$user=M('user');
    		$user->create();
    		if($result=$user->save()){
    			$this->success('修改成功');
    		}
    		else{$this->error('出错');}
    	}
    	else{
    		$name=session('name');
	        $this->assign('name',$name);

	        $user = M('user');

	        $user = $user->order('type asc,id desc')->select();
	        $this->assign('user',$user);
	        //dump($user);

	        $this->display();
	    	}
        
    }

 

}