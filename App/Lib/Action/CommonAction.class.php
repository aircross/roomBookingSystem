<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
    public function situation(){
         $name=session('name');
        $this->assign('name',$name);
        //个人用户显示所属部门
        if(session('type')==2){
        	$department='@'.session('department');
        $this->assign('department',$department);
        }
        

        import("ORG.Util.Date");// 导入日期类
        $selectedMonth=$_GET[_URL_][3];
        $selectedDate=Date('Y').'-'.$selectedMonth.'-1';

        if($selectedMonth!=Date('n')){  //月份不为当月    
            $Date = new Date($selectedDate);
            $monthNow = Date('n');
            $month =  $selectedMonth;
            $today = 1;
            $week = date('w',strtotime(str_replace('_','-',$selectedDate)));//获取星期数字
        }else{//月份为当月
         $Date = new Date(now);
          $month = Date('n');
           $monthNow = Date('n');
            $today = Date('d');
            $week = date('w');//获取星期数字
        }
        if(!$selectedMonth){//月份不带参数
            $Date = new Date(now);
          $monthNow = Date('n');
           $month = Date('n');
            $today = Date('d');
            $week = date('w');//获取星期数字
        }
       
        $maxDay = $Date->maxDayOfMonth(); // 计算当月的最大天数
        $this->assign('maxDay',$maxDay);

        $year = Date('Y');
       
        
        $this->assign('year',$year);
        $this->assign('month',$month);
        $this->assign('monthNow',$monthNow);
        $this->assign('today',$today);
        $this->assign('week',$week);
        
        $order = M('order');
        $roomApply = $order->where('state=2')->order('startTime')->select();
        $this->assign('roomApply',$roomApply);

        $this->display();

    }




    public function apply(){
        $name=session('name');
        $this->assign('name',$name);
        if(session('type')==2){
        	$department='@'.session('department');
        $this->assign('department',$department);}

        import("ORG.Util.Date");// 导入日期类
        $selectedMonth=$_GET[_URL_][3];
        $selectedDate=Date('Y').'-'.$selectedMonth.'-1';

        if($selectedMonth!=Date('n')){  //月份不为当月    
            $Date = new Date($selectedDate);
            $monthNow = Date('n');
            $month =  $selectedMonth;
            $today = 1;
            $week = date('w',strtotime(str_replace('_','-',$selectedDate)));//获取星期数字
        }else{//月份为当月
         $Date = new Date(now);
          $month = Date('n');
           $monthNow = Date('n');
            $today = Date('d');
            $week = date('w');//获取星期数字
        }
        if(!$selectedMonth){//月份不带参数
            $Date = new Date(now);
          $monthNow = Date('n');
           $month = Date('n');
            $today = Date('d');
            $week = date('w');//获取星期数字
        }
       
        $maxDay = $Date->maxDayOfMonth(); // 计算当月的最大天数
        $this->assign('maxDay',$maxDay);

        $year = Date('Y');
       
        
        $this->assign('year',$year);
        $this->assign('month',$month);
        $this->assign('monthNow',$monthNow);
        $this->assign('today',$today);
        $this->assign('week',$week);
        
        $order = M('order');
        $roomApply = $order->where('state=2')->order('startTime')->select();
        $this->assign('roomApply',$roomApply);

        $this->display();
    }







    public function applyAdd(){
        $type=session('type');
        
        
        $data['applyer']=session('name');
        $data['phone']=session('phone');
        $data['department']=session('department');
        $data['room']='一号楼报告厅'/*$_POST['room']*/;
        $data['useDate']=$_POST['useDate'];
        $data['startTime']=$_POST['startTime'];
        $data['endTime']=$_POST['endTime'];
        $data['useWay']=$_POST['useWay'];
        $data['exDevice']=$_POST['exDevice'];
        $data['submitDate']=date("Y-m-d");

        if(session('type')==3){
            $data['state']=1;
            $data['applyer']=session('department');
        }
        
        $order = M("order");

        $result=$order->data($data)->add();
        
        
        if($result){
            if($data['state']==1){
             $this->success("已预约，已提交总务处审批");
            }else{ $this->success("已预约，已提交部门审批");}
       
            

        }
        else{
             $this->error("出错");
        }
        

    }







    public function applyDel(){
        $data['id'] = $_GET['_URL_'][3];
        $order = M("order");
        $result=$order->where($data)->delete();
        
        
        if($result){           
             $this->success("已删除");
        }
        else{
             $this->error("出错");
        }
        

    }








    public function myApply(){
        $name=session('name');
        $this->assign('name',$name);
       if(session('type')==2){
        	$department='@'.session('department');
        $this->assign('department',$department);}

        $order = M('order');
        $data['applyer']=$name;

        $roomApplyed = $order->where($data)->order('state,useDate,startTime')->select();
        $this->assign('roomApplyed',$roomApplyed);
        //dump($roomApplyed);
        $this->display();
    }







    public function applyCheck(){
        $name=session('name');
        $this->assign('name',$name);

        $order = M('order');
        if(session('type')==3){$roomApplyCheck = $order->where('state=0')->order('useDate asc,startTime asc')->select();}
        if(session('type')==4){$roomApplyCheck = $order->where('state=1')->order('useDate asc,startTime asc')->select();}
        $this->assign('roomApplyCheck',$roomApplyCheck);

        $this->display();
    }







    public function refuse(){
        $date['id']= $_GET[_URL_][3];
        if(session('type')==3){$date['state']=-1;}
        if(session('type')==4){$date['state']=-2;}
        $order = M("order"); // 实例化User对象
        $result=$order->save($date); 
        if($result){
            $this->success("已驳回");

        }
        else{
             $this->error("出错");
        }
        
    }







    public function agree(){
        $date['id']= $_GET[_URL_][3];
        if(session('type')==3){$date['state']=1;}
        if(session('type')==4){$date['state']=2;}
        $order = M("order"); // 实例化User对象
        $result=$order->save($date); 
        if($result){
            $this->success("已审核");

        }
        else{
             $this->error("出错");
        }
        
    }







    public function roomApplyByTable(){
        $name=session('name');
        $this->assign('name',$name);
         if(session('type')==2){
        	$department='@'.session('department');
        $this->assign('department',$department);}

        $Date = $_GET[_URL_][3];
        $startTime=$_GET[_URL_][5];
        $endTime=$_GET[_URL_][7];
        $this->assign('Date',$Date);
        $this->assign('startTime',$startTime);
        $this->assign('endTime',$endTime);


        $this->display();
    }







    public function passChange(){
        $name=session('name');
        $this->assign('name',$name);
        if(session('type')==2){
            $department='@'.session('department');
        $this->assign('department',$department);}
        $this->display();
    }







    public function passchangeupdate(){
        $oldPass=md5($_POST['oldPass']);
        $newPass=md5($_POST['newPass']);

        $data['name']=session('name');
        $data['pass']=$oldPass;
        $newPass['pass']=$newPass;
        $user = M("user"); // 实例化User对象
        $result=$user->where($data)->find();
        if($result){
            $user->where($data)->setField('pass',$newPass);
            $this->success("密码已修改");
        }
        else{
             $this->error("旧密码不正确！");
        }
        
    }


     public function useGuide(){
        $name=session('name');
        $this->assign('name',$name);
       if(session('type')==2){
            $department='@'.session('department');
        $this->assign('department',$department);}
         $this->display();

     }
}