<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title>后台管理中心</title><link href="__PUBLIC__/statics/css/reset.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/system.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/table_form.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles1.css" title="styles1" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles2.css" title="styles2" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles3.css" title="styles3" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles4.css" title="styles4" media="screen" /><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/styleswitch.js"></script><script type="text/javascript">
	window.focus();
</script></head><body><style type="text/css">
	html{_overflow-y:scroll}
</style><div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;"><script type="text/javascript">
$(function(){if ($.browser.msie && parseInt($.browser.version) < 7) $('#browserVersionAlert').show();}); 
</script><div class="explain-col mb10" style="display:none" id="browserVersionAlert">
使用IE8浏览器可获得最佳视觉效果</div><div class="col-2 lf mr10" style="width:48%"><h6>我的个人信息</h6><div class="content">
	您好，<?php echo ($_SESSION['adminname']); ?><br />
	所属角色：超级管理员 <br /><div class="bk20 hr"><hr /></div>
	上次登录时间：<?php echo (fdate($admin['lastlogtime'])); ?><br />
	上次登录IP：<?php echo ($admin['lastlogip']); ?><br /></div></div><div class="col-2 col-auto"><h6>安全提示</h6><div class="content" style="color:#ff0000;">※ 强烈建议您网站上线后，建议关闭 DEBUG （前台SQL错误提示）<br />
※ 任何修改前请备份程序，并采用专业的编码工具修改。<br />
※ 任何途径破解销售程序，将担负相应的法律责任。<br />
※ 违法销售举报电话：0-18653893064<br /><div class="bk20 hr"><hr /></div></div></div><div class="bk10"></div><div class="col-2 lf mr10" style="width:48%"><h6>快捷方式</h6><div class="content" id="admin_panel"><?php if(is_array($adminqmenus)): $i = 0; $__LIST__ = $adminqmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span>
			[<a target="right" href="<?php echo ($vo['url']); ?>"><?php echo ($vo['menuname']); ?></a>]   
		</span><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="col-2 col-auto"><h6>系统信息</h6><div class="content">
	程序版本：云豹直播 V5.2  Release 20150805 <br />
	操作系统：<?php echo PHP_OS;?><br />
	服务器软件：<?php echo ($_SERVER['SERVER_SOFTWARE']); ?><br />
	PHP 版本：<?php echo PHP_VERSION;?><br />
	上传文件：<?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件";?><br /></div></div><div class="bk10"></div><div class="col-2 lf mr10" style="width:48%"><h6>云豹直播 开发团队</h6><div class="content">
	版权所有：云豹直播<br />
	总 策 划：NaHan LvDou<br /></div></div><div class="col-2 col-auto"><h6>授权信息</h6><div class="content">
	程序版本：云豹直播 V5.2  Release 20150805 <br />
	授权类型：<span id="phpcms_license"></span> 商业授权<br />
	序列号：<span id="phpcms_sn"></span>LVDOU532141SY <br /></div></div><div class="bk10"></div></div></body></html><script type="text/javascript">$("#main_frameid").removeClass("display");</script>