<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/cssreset-min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/base.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/RoomYY/reg.css" />



</head>

<body>
<div id="Rpage" class="Rpage-main">
  <div id="Rheader">
    <a class="logo" href="__ROOT__/" target="_blank"><img src="__ROOT__/Public/img/logo.png" alt=""></a>
    <span class="slogan">报告厅智能借用系统</span>
   <div class="ext"><a href="__ROOT__/" >登陆</a></div>
  </div>

  <div id="Rbody">
    <div class="title">
      <b class="crl"></b>
      <b class="crr"></b>
      <!--<a href="http://mail.163.com/html/mail_intro/" target="_blank" class="ext">了解详情»</a>-->
      <h1>欢迎注册！您必须真实填写下列信息。</h1>
    </div>
    <div class="content">
      <form id="regForm" class="g-collection collection-main"  action="__URL__/regAction.html" method="post" >

            
            <div class="g-collection-item">
              
              <label class="g-collection-label"><span class="txt-impt">*</span>&nbsp;真实姓名及部门&nbsp;</label>
              <div id="unameWrap" class="ipt-wraper ">
                <input name="userName" id="unameInp"  type="text" class="g-ipt" style="width:140px;color:#999" onblur="if (!(/^[\u4E00-\u9FA5]/.test(this.value)) ){alert('您的输入有误，必须输入中文'); this.value='';}" >
                <strong>@</strong>
                <select name="department" id="department" class="input-box" style="width:140px;">
            <option value="党委办公室">党委办公室</option>
            <option value="院长办公室">院长办公室</option>
            <option value="拆迁办">拆迁办</option>
            <option value="教务处">教务处</option>
            <option value="学工部">学工部</option>
            <option value="团委">团委</option>
            <option value="招就处">招就处</option>
            <option value="人事科">人事科</option>
            <option value="后勤科">后勤科</option>
            <option value="实验中心">实验中心</option>
            <option value="财务部">财务部</option>
            <option value="图书馆">图书馆</option>
            
            <option value="人文科学系">人文科学系</option>
            <option value="外语系">外语系</option>
            <option value="生命科学系">生命科学系</option>
            <option value="信息与电子系">信息与电子系</option>
            <option value="工程与技术系">工程与技术系</option>
            <option value="经济与管理系">经济与管理系</option>
            <option value="服装与艺术设计系">服装与艺术设计系</option>    
            <option value="基础课部">基础课部</option>
        </select>
               
              </div>
               <div id="unameNot" class="txt-info">2-4个字符，只允许中文。</div>

            </div>
            <div id="passworditem" class="g-collection-item">
                
              <label class="g-collection-label"><span class="txt-impt">*</span>&nbsp;密码&nbsp;</label>
              <div id="passwWrap" class="ipt-wraper ">
                <input name="userPass" id="passwInp" type="password" value="" class="g-ipt" style="ime-mode:disabled" tabindex="2">
                
              </div>
              <div id="passwNot" class="txt-info">6~16个字符，区分大小写</div>
            </div>
            

            
             
            <div id="mobileitem" class="g-collection-item">
                
              <label class="g-collection-label"><span class="txt-impt"></span><span class="txt-impt" >*</span>&nbsp;手机号码&nbsp;</label>
              <div class="ipt-wraper" id="mobileWrap">
                <input name="userPhone"  id="mobileInp" type="text" class="g-ipt" tabindex="7" onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" >
              </div>
              <div id="mobileNot" class="txt-info">遇到突发情况时，能够联系到您。</div>
            </div>
            <div id="vcodeitem" class="g-collection-item">
               
              <label class="g-collection-label"><span class="txt-impt">*</span>&nbsp;验证码&nbsp;</label>
              <div class="ipt-wraper" id="verifycodeWrap">
                <input id="verify" name="verify" type="text" class="g-ipt" style="width:174px" tabindex="8"> 
                <img width="120" height="50" id="vcode_img" src="__ROOT__/Index/verify/" class="vcode_img" alt="验证码图片">
               
                             </div>
              <div id="verifyCodeNot" class="txt-info"><span id="showimgMsg">请输入图片中的字符，区分大小写</span> <a href="javascript:;" id="imageA" onClick="changeVerify()">看不清楚？换张图片</a></div>
            </div>
            
            <div id="usernotice" class="g-collection-item">
                <!--
              <div class="ipt-wraper" id="serviceItmeWrap">
              <input type="checkbox" checked="checked" id="serviceItemChek">
                <label class="provision">
                同意“<a href="http://reg.163.com/agreement.shtml" target="_blank">报告厅借用须知</a>”和“<a href="http://reg.163.com/agreement_game.shtml" target="_blank">隐私权保护和个人信息利用政策</a>” <input id="checkbox1" type="text" style="opacity:0;filter:alpha(opacity=0)"></label>
              </div>
               -->
              <div><input type="button" title="立即注册" value="" class="btn-reg" id="regBtn" tabindex="9"></div>
            </div>

      </form>
    </div>
    
    <div class="bottom">
      <b class="crl"></b>
      <b class="crr"></b>
    </div>
  </div>
  <div id="Rfooter">
  <a >报告厅预约管理系统</a>&nbsp;&nbsp;|&nbsp;&nbsp;绍兴文理学院元培学院版权所有&nbsp;©&nbsp;2012&nbsp;&nbsp;|&nbsp;&nbsp;<a title="计算机0901 王学峰 687905" href="http://wtser.42qu.com/" target="_blank">技术支持</a>
    
   </div>
</div>

</body>
<script language="JavaScript">
function changeVerify(){
  var timenow = new Date().getTime();
  document.getElementById('vcode_img').src='__ROOT__/Index/verify/'+timenow;  
}
</script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	$("#regBtn").click(function(){

  $("#regForm").submit();
  })

})


</script>
</html>