<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
       if(session('type')==3){
            $this->redirect('Common/situation');
         }
         else if(session('type')==2){
            $this->redirect('Common/situation');
         }
         else if(session('type')==1){
            $this->redirect('Common/situation');
         }
         else if(session('type')==4){
           $this->redirect('Common/situation');
         }
         else{
            $this->display();
         }
    }

    Public function verify(){
        import("ORG.Util.Image");
        Image::buildImageVerify(6,5);
    }
    public function reg(){
         $this->display();
    }

    public function regAction(){
        if($_SESSION['verify'] != md5($_POST['verify'])) {
            $this->error('验证码错误！');
            
        }
        $data['name']=$_POST['userName'];
        if(!$_POST['userName']){
            $this->error('姓名不能为空');
        }
         if(!$_POST['userPass']){
            $this->error('密码不能为空');
        }
        if(!$_POST['userPhone']){
            $this->error('手机不能为空');
        }

        $data['pass']=md5($_POST['userPass']);
        $data['phone']=$_POST['userPhone'];
        $data['type']=2;
        $data['department']=$_POST['department'];

        $user = M("user");
        $data2['name']=$_POST['userName'];
        if($oldUser=$user->where($data2)->find()){
            $this->error("用户名已存在");

        }else{
            $result=$user->data($data)->add();          
            if($result){
                $this->success("注册成功！","../index.html");
            }
            else{
                 $this->error("出错");
            }

        }

        
    }

    public function check(){
        if(!$_POST['userName'] && $_POST['department']){$data['name']=$_POST['department'];}else{ $data['name']=$_POST['userName'];}
       // echo '检查用户名、密码';
       
        $data['pass']=md5($_POST['userPass']);
       
        $user = M("user"); // 实例化User对象
        $result=$user->where($data)->find();
        
        
        if($result){
            session('name',$result['name']); //讴置session   

            if($_POST['remember']){
                session('type',$result['type']); //讴置session    
                
            }
           
            if($result['type']==4){
                session('type',4); 
                
            }
            else if($result['type']==3){
                session('type',3); 
                session('phone',$result['phone']); //讴置session   
                session('department',$result['department']); //讴置session   
                
            }
            else if($result['type']==1){
                session('type',1); 
                 
            }
            else if($result['type']==2){
                session('type',2); 
                session('phone',$result['phone']); //讴置session   
                session('department',$result['department']); //讴置session   
                
                
            }
            $data2['id']=$result['id'];
            $user->where($data2)->setInc('logTime'); // 登陆次数加1
            if(($result['logTime']==0) && (($result['type']==2) || ($result['type']==3)) ){
                $this->redirect('Common/useGuide');
            }else{
             $this->redirect('Common/situation');
            }
            
          
            
                
        }
        else{
            $this->error("账号或密码错误！");
        }
    
            
        

    }

    public function quit(){
        session(null); // 清空当前的session
        $this->redirect('index/');
    }

}