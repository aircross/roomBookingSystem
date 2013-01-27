<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>借用须知</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/menu.css" />
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
<div id="useGuide" style="width:960px;margin:0 auto;">
<div class="Section0">
    <p class="p0" style="text-align:center;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:24px">多功能报告厅的借用须知</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">一、报告厅使用工作流程</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">1、申请审批：学术馆多功能报告厅的使用均由院办行政科审批。使用部门可在校内网下载《温州医学院会议室申请单》，部门经办人员填写好并由部门负责人签好字后，交到院办，经院办审批后方可使用。院办审批后将通知报告厅设备管理人员。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">2、联系调试：使用部门必须提早一天联系报告厅设备管理员，并到会场向会议室管理人员提出会议所需相关设备并进行调试，同时提供会议议程，如有额外设备需求，如借用无线话筒、激光笔等，需填写《报告厅设备借用单》。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">3、提前到场：报告厅设备管理员和使用部门经办人员在会议前30分钟开启相关设备，观察相关设备的运行状况。如有意外情况，及时与有关人员沟通解决。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">4、结束清点：会议结束后，使用部门经办人员配合报告厅设备管理员进行设备清点工作，如归还借用设备。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">二、报告厅使用的注意事项：</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">1、使用部门应提早与院办行政科和网络与信息中心联系，便于统筹安排，建议使用在一周前向院办提出申请。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">2、使用部门必须提供会议进程表，并指定一位联系人与行政科和网络与信息中心协调会议进程中的各种问题，如未提供会议进程表，则无法保证会议正常进行。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">3、使用部门对会议进程中所涉及的各种设备使用和灯光效果应在会议预演过程中均要演示并确定。在会议进行中，尽量不做设备使用的调整。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:43px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">4、会议结束清场时, 学术馆工作人员对会议室的使用情况进行检查，如有设备损坏或借用物品遗失，由当次报告厅使用部门负责赔偿损失。</span><span style="font-size:16px"></span>
    </p>
    <p class="p0" style="text-indent:407px;margin-bottom:0px;margin-top:0px;">
        <span style="font-weight:bold;font-size:19px">                                             </span>
    </p>
</div>
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
</html>