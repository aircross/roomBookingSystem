<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-借用申请</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/menu.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/apply.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/applyList.css" />
<style type="text/css">
	tr:hover{
	cursor: pointer;
	}
</style>
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
	<div class="steps steps-disable">2.确定时间</div>
	<div class="steps-pointer">-></div>
	<div class="steps steps-disable">3.填写信息</div>
</div>
<form  action="__ROOT__/Common/applyAdd.html" method="post" >
<div id="inputForm">
	<p id="firstStep">借用日期：
<input name="useDate" id="d422" maxlength="10" class="Wdate" type="text" onfocus="WdatePicker({dateFmt:'yyyy-M-d',minDate:'%y-%M-{%d+1}'})">
	  <a id="tableInput" href="javascript:;">从借用状况表中选择</a></p>
	<a id="nextUseTime" href="javascript:;" title="下一步"></a>
	
	<p id="secStep">开始时间：
	<input name="startTime" type="text" id="d242" value="08:00" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'HH:mm',minDate:'8:00:00',maxDate:'22:00:00'})" class="Wdate"/>
	结束时间：<input name="endTime" type="text" id="d242" value="22:00" onfocus="WdatePicker({skin:'whyGreen',dateFmt:'HH:mm',minDate:'8:00:00',maxDate:'22:00:00'})" class="Wdate"/>
	</p>
	<p class="step-btn"><a id="beforeInfo" href="javascript:;" title="上一步"></a> <a id="nextInfo" title="下一步" href="javascript:;"></a></p>
	<p id="otherInfo">借用用途: <input name="useWay" type="text" value="" /> 额外设备: <input name="exDevice" type="text" value="无" /></p>
	
	<p class="step-btn"><a id="beforefinished" href="javascript:;" title="上一步"></a> <input id="finished" name="sbubtn" type="submit"  value="" /></p>
</div>
</form>


<div id="dataSelect" style="display:none;">
<p id="dataP">
<?php echo ($year); ?>年 
<select name="month"  onchange="javascript:window.location.href=this.options[this.selectedIndex].value">
  <?php $__FOR_START__=$monthNow;$__FOR_END__=$month;for($i=$__FOR_START__;$i < $__FOR_END__;$i+=1){ ?><option name="month" value="__ACTION__/month/<?php echo ($i); ?>"><?php echo ($i); ?>月</option><?php } ?>  

  <option name="month" value="__ACTION__/month/<?php echo ($i); ?>" selected="selected"><?php echo ($i); ?>月</option>

  <?php $__FOR_START__=$month+1;$__FOR_END__=12+1;for($i=$__FOR_START__;$i < $__FOR_END__;$i+=1){ ?><option name="month" value="__ACTION__/month/<?php echo ($i); ?>"><?php echo ($i); ?>月</option><?php } ?>              
</select>
</p>

<table width="100%" border="1" >
  <thead >
    <tr >
      <th scope="col">日期</th>
      <th scope="col">星期</th>
      <th scope="col">时段 08：00-22：00</th>     
    </tr>
  </thead>

<tbody>
  <?php $__FOR_START__=$today;$__FOR_END__=++$maxDay;for($i=$__FOR_START__;$i < $__FOR_END__;$i+=1){ ?><tr>
      
      <td width=60><?php echo ($month); ?>月<?php echo ($i); ?>日</td>

      <td width=60>星期
      <?php if($week < 7 ): else: ?><!--<?php echo ($week=0); ?>--><?php endif; ?>

        
        <?php if($week == 0 ): ?>日<?php endif; ?>
        <?php if($week == 1 ): ?>一<?php endif; ?>
        <?php if($week == 2 ): ?>二<?php endif; ?>
        <?php if($week == 3 ): ?>三<?php endif; ?>
        <?php if($week == 4 ): ?>四<?php endif; ?>
        <?php if($week == 5 ): ?>五<?php endif; ?>
        <?php if($week == 6 ): ?>六<?php endif; ?>
        <!--<?php echo ($week++); ?>-->
      </td>
    
      <td style="padding:0;" >
      <?php $newdate=$year.'-'.$month.'-'.$i;?>
  <?php $lastTime = '08:00'; ?> 
      <?php if(is_array($roomApply)): foreach($roomApply as $key=>$vo): if($vo["useDate"] == $newdate): $firstTime = $vo["startTime"]; ?> 
        

        <?php if($firstTime != $lastTime): ?><!--开始时间和结束时间不相同-->
  
          <?php $percent = strtotime("$firstTime")-strtotime("$lastTime")-120; ?>
           <a href="__URL__/roomApplyByTable/Date/<?php echo ($newdate); ?>/startTime/<?php echo ($lastTime); ?>/endTime/<?php echo ($firstTime); ?>">
             <div  class="freeTime" percent="<?php echo ($percent/504); ?>" title="空闲时段 <?php echo ($lastTime); ?> - <?php echo ($vo["startTime"]); ?>" style="width:<?php echo ($percent/504); ?>%;height:100%;float:left;cursor: pointer;/*background-color:#fafafa;*/" ><!--<?php echo ($lastTime); ?> - <?php echo ($vo["startTime"]); ?>--></div>
          </a><?php endif; ?>
        <?php $lastTime = $vo["endTime"]; ?> 
        <?php $percent = strtotime("$lastTime")-strtotime("$firstTime")-120; ?>
        <div percent="<?php echo ($percent/504); ?>" style="width:<?php echo ($percent/504); ?>%;height:100%;float:left;background-color:#3C3737; border:1px solid #fff;cursor: pointer;" title="<?php echo ($vo["startTime"]); ?>-<?php echo ($vo["endTime"]); ?> | <?php echo ($vo["department"]); ?> | <?php echo ($vo["applyer"]); ?> | <?php echo ($vo["phone"]); ?> | <?php echo ($vo["useWay"]); ?>" > <!--<?php echo ($vo["startTime"]); ?> - <?php echo ($vo["endTime"]); ?>--></div>

         
        
        

        <?php else: endif; endforeach; endif; ?>

      <?php if($lastTime != '22:00' ): $percent = strtotime("22:00")-strtotime("$lastTime")-120; ?>
      <a href="__URL__/roomApplyByTable/Date/<?php echo ($newdate); ?>/startTime/<?php echo ($lastTime); ?>/endTime/22:00">
        <div class="freeTime" percent="<?php echo ($percent/504); ?>" title="空闲时段 <?php echo ($lastTime); ?>-22:00" style="width:<?php echo ($percent/504); ?>%;height:20px;float:left;/*background-color:#fafafa;*/" ><!--<?php echo ($lastTime); ?>-22:00--></div>
      </a><?php endif; ?>
      </td>    
    </tr><?php } ?>
</tbody> 
</table>
</div>


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

$("#secStep").hide();
$("#nextInfo").hide();
$("#beforeInfo").hide();
$("#otherInfo").hide();
$("#finished").hide();
$("#beforefinished").hide();


	$("#nextUseTime").click(function(){
	 $(".steps:eq(1)").removeClass("steps-disable");
	 $("#firstStep").hide();
	 $("#nextUseTime").hide();
	 $("#beforeInfo").show();
	 $("#secStep").show();
	 $("#nextInfo").show();
	})

	$("#tableInput").click(function(){
		$("#inputForm").hide();
		$("#dataSelect").show();
	})

	


	$("#nextInfo").click(function(){
	$(".steps:eq(2)").removeClass("steps-disable");
	$("#secStep").hide();
	$("#nextInfo").hide();
	$("#beforeInfo").hide();
	$("#beforefinished").show();
	$("#otherInfo").show();
	$("#finished").show();
	})

	$("#beforeInfo").click(function(){
		$("#beforeInfo").hide();
	 	$("#secStep").hide();
	 	$("#nextInfo").hide();

	 $(".steps:eq(1)").addClass("steps-disable");
	 $("#firstStep").show();
	 $("#nextUseTime").show();
	 

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