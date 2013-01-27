<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-借用申请</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/menu.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/apply.css" />

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
<div id="add-process">
	<div class="steps">1.选择日期</div>
	<div class="steps-pointer">-></div>
	<div class="steps ">2.确定时间</div>
	<div class="steps-pointer">-></div>
	<div class="steps steps-disable">3.填写信息</div>
</div>
<form id="roomApplyBox" action="__URL__/applyAdd.html" method="post" >

<!--<p>第一步：选择教室</p>
<select name="room" style="display:none;">
	
	<?php if(is_array($room)): $i = 0; $__LIST__ = $room;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["roomName"]); ?>"><?php echo ($vo["roomName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
-->
<div id="inputForm">
<input name="useDate" type="hidden" value="<?php echo ($Date); ?>" >
<p id="secStep">开始时间：
	<input name="startTime" type="text" id="d242" value="<?php echo ($startTime); ?>" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'HH:mm',minDate:'8:00:00',maxDate:'22:00:00'})" class="Wdate"/>
	结束时间：<input name="endTime" type="text" id="d242" value="<?php echo ($endTime); ?>" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'HH:mm',minDate:'8:00:00',maxDate:'22:00:00'})" class="Wdate"/>
	</p>
	 <a id="nextInfo" href="javascript:;" title="下一步"></a>

	 <p id="otherInfo">借用用途: <input name="useWay" type="text" value="" /> 额外设备: <input name="exDevice" type="text" value="无" /></p>
	
	<p class="step-btn"><a id="beforefinished" href="javascript:;" title="上一步"></a> <input id="finished" name="sbubtn" type="submit"  value="" /></p>


</div>
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
<script type="text/javascript" src="__PUBLIC__/js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
$("#otherInfo").hide();
$("#beforefinished").hide();
$("#finished").hide();
	$("#nextInfo").click(function(){
	$(".steps:eq(2)").removeClass("steps-disable");
	$("#secStep").hide();
	$("#nextInfo").hide();
	$("#beforeInfo").hide();
	$("#beforefinished").show();
	$("#otherInfo").show();
	$("#finished").show();
	})


	$("#beforefinished").click(function(){
	$("#beforefinished").hide();
	$("#otherInfo").hide();
	$("#finished").hide();
	$(".steps:eq(2)").addClass("steps-disable");
	$("#secStep").show();
	$("#nextInfo").show();
	$("#beforeInfo").show();
	
	})
})
</script>
</html>