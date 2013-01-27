<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-预约列表</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/menu.css" />

<style type="text/css">
<!--
#changePass {
	height:200px;
	width:230px;
	margin:10px auto;
	font-size:1.6em;
}
#changePass input{
margin-top:5px;

}

#changePass p{
line-height:30px;
font-weight: bold;
color: 
#7A7373;
}
-->
</style>
</head>

<body>


<ul id="menu">
	
	<li><a href="__ROOT__/Common/situation.html">借用情况</a></li>  
	<?php if((session('type') == 2) || (session('type') == 3)): ?><li><a href="__ROOT__/Common/apply.html">借用申请</a></li>
      
      	<li><a href="__ROOT__/Common/myApply.html">我的申请</a></li><?php endif; ?> 
    <?php if((session('type') == 3) || (session('type') == 4)): ?><li><a href="__ROOT__/Common/applyCheck.html">借用审核</a></li><?php endif; ?>	
	<?php if((session('type') == 4)): ?><li ><a href="__ROOT__/Admin/applyEdit.html">强制修改</a></li>
		<!--
    <li><a href="__URL__/userManager.html">用户管理</a></li>  
    <li><a href="__URL__/roomManager.html">教室管理</a></li>
    --><?php endif; ?>

    
    <li style="float:right;padding-right: 0;"><a href="__ROOT__/Index/quit.html">退出</a></li>
    <li style="float:right;"><a href="__URL__/passChange.html">密码更改</a></li>
  <li style="float:right;"><?php echo ($name); echo ($department); ?></li>  
    
</ul>

<form id="changePass" method="post" action="passChangeUpdate.html">
<p>密码修改</p>
<input id="oldPass" name="oldPass" type="text" value="输入旧密码" />
<input id="newPass" name="newPass" type="text" value="输入新密码" />
<input name="" type="submit" value="确认修改" />
</form>
<div id="footer">
	<span id="icp" >
    © 2012 绍兴文理学院元培学院 报告厅预约管理系统 版权所有.
</span>
<span class="fright">
 - <a style="color:black;" title="多功能报告厅的借用须知" href="__ROOT__/Common/useGuide.html">借用须知</a>
    -
    - <a style="color:black;" title="计算机0901 王学峰 687905" href="http://wtser.42qu.com">技术支持</a>
    -
  
</span>

</div>


</body>

<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	$("#oldPass").focus(function(){
		if($("#oldPass").val()=='输入旧密码'){
			$("#oldPass").val('');
		}        
    })

    $("#oldPass").blur(function(){
    	if($("#oldPass").val()==''){
			$("#oldPass").val('输入旧密码');
		}
       
    })

    $("#newPass").focus(function(){
		if($("#newPass").val()=='输入新密码'){
			$("#newPass").val('');
		}        
    })

    $("#newPass").blur(function(){
    	if($("#newPass").val()==''){
			$("#newPass").val('输入新密码');
		}
       
    })

})


</script>

</html>