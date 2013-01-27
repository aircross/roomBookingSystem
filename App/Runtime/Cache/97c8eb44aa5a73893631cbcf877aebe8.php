<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-用户管理</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/menu.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/applyEdit.css" />

</head>

<body>
<ul id="menu">
	
	<li><a href="__ROOT__/Common/situation.html">借用情况</a></li>  
	<?php if((session('type') == 2) || (session('type') == 3)): ?><li><a href="__ROOT__/Common/apply.html">借用申请</a></li>
      
      	<li><a href="__ROOT__/Common/myApply.html">我的申请</a></li><?php endif; ?> 
    <?php if((session('type') == 3) || (session('type') == 4)): ?><li><a href="__ROOT__/Common/applyCheck.html">借用审核</a></li><?php endif; ?>	
	<?php if((session('type') == 4)): ?><li ><a href="__ROOT__/Admin/applyEdit.html">强制修改</a></li>
		
    <li><a href="__ROOT__/Admin/userMgr.html">用户管理</a></li>  
   <!-- <li><a href="__URL__/roomManager.html">教室管理</a></li>
    --><?php endif; ?>

    
    <li style="float:right;padding-right: 0;"><a href="__ROOT__/Index/quit.html">退出</a></li>
    <li style="float:right;"><a href="__URL__/passChange.html">密码更改</a></li>
  <li style="float:right;"><?php echo ($name); echo ($department); ?></li>  
    
</ul>

<table  border="1">
<thead>
	<th>编号</th>
	<th>姓名</th>
	<th>权限等级</th>
	<th>联系电话</th>
	<th>所属部门</th>
	<th>登陆次数</th>
	
	<th>操作</th>
</thead>
<tbody>
<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		<form method="post" action="__ROOT__/Admin/userMgr/edit">
		<input name="id" type="hidden" value="<?php echo ($vo["id"]); ?>"/>
		<td><?php echo ($vo["id"]); ?></td>
		<td>
			<?php if($vo["type"] != 2): echo ($vo["name"]); ?>
			</td>
			<?php else: ?><input name="name" type="text" value="<?php echo ($vo["name"]); ?>"/><?php endif; ?>
		<td>
			<?php if($vo["type"] == 1): ?><span style="color:green;">管理人</a>
			<?php elseif($vo["type"] == 2): ?><span >个人</span>
			<?php elseif($vo["type"] == 3): ?><span style="color:green;">部门</span>
			<?php elseif($vo["type"] == 4): ?><span style="color:green;">总务处</span>
			<?php else: endif; ?>
		</td>
		<td><input name="phone" type="text" value="<?php echo ($vo["phone"]); ?>"/></td>
		<td><?php echo ($vo["department"]); ?></td>
		<td><?php echo ($vo["logTime"]); ?></td>
		<td><input name="submit" type="submit" value="修改"/> | <a href="__ROOT__/Admin/userMgr/del/<?php echo ($vo["id"]); ?>">删除</a></td>
		</form>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>


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



</html>