<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title>FMScms - 后台管理中心</title><link href="__PUBLIC__/statics/css/reset.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/system.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/table_form.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles1.css" title="styles1" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles2.css" title="styles2" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles3.css" title="styles3" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles4.css" title="styles4" media="screen" /><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/styleswitch.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/formvalidator.js" charset="UTF-8"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/formvalidatorregex.js" charset="UTF-8"></script><script type="text/javascript">
	window.focus();
</script></head><body><style type="text/css">
	html{_overflow-y:scroll}
</style><script type="text/javascript"><!--
	$(function(){
		SwapTab('setting','on','',4,1);
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});		
		
		$("#html_cache_time").formValidator({onshow:"请输入缓存时间",onfocus:"请输入缓存时间"}).inputValidator({onerror:"缓存时间输入有误"}).regexValidator({regexp:"num",datatype:"enum",onerror:"缓存时间为数字"});
		$("#html_file_suffix").formValidator({onshow:"请输入缓存文件后缀",onfocus:"请输入缓存文件后缀",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入缓存文件后缀"});

	})
//--></script><form action="__URL__/save_cacheset/" method="post" id="myform"><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',4,1);">缓存机制</li></ul><div id="div_setting_1" class="contentList pad-10"><?php
if (file_exists('../Conf/config.php')) { $para_info = include '../Conf/config.php'; } ?><table width="100%"  class="table_form"><tr><th width="120">启用缓存</th><td class="y-bg"><input name="para[HTML_CACHE_ON]" value="1" type="radio" <?php if($para_info['HTML_CACHE_ON'] == true): ?>checked<?php endif; ?>> 是&nbsp;&nbsp;&nbsp;&nbsp;
	 <input name="para[HTML_CACHE_ON]" value="0" type="radio" <?php if($para_info['HTML_CACHE_ON'] == false): ?>checked<?php endif; ?>> 否</td></tr><tr><th>缓存时间</th><td class="y-bg"><input type="text" class="input-text" name="para[HTML_CACHE_TIME]" id="html_cache_time" size="5" value="<?php echo ($para_info['HTML_CACHE_TIME']); ?>"/> 秒</td></tr><tr><th>缓存文件读取方式</th><td class="y-bg"><input name="para[HTML_READ_TYPE]" value="0" type="radio" <?php if($para_info['HTML_READ_TYPE'] == 0): ?>checked<?php endif; ?>> readfile&nbsp;&nbsp;&nbsp;&nbsp;
	 <input name="para[HTML_READ_TYPE]" value="1" type="radio" <?php if($para_info['HTML_READ_TYPE'] == 1): ?>checked<?php endif; ?>> redirect</td></tr><tr><th>缓存文件后缀</th><td class="y-bg"><input type="text" class="input-text" name="para[HTML_FILE_SUFFIX]" id="html_file_suffix" size="5" value="<?php echo ($para_info['HTML_FILE_SUFFIX']); ?>"/></td></tr></table></div><div class="bk15"></div><input name="dosubmit" type="submit" value="提交" class="button"></div></div></form></body><script type="text/javascript">function SwapTab(name,cls_show,cls_hide,cnt,cur){
    for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}

function showsmtp(obj,hiddenid){
	hiddenid = hiddenid ? hiddenid : 'smtpcfg';
	var status = $(obj).val();
	if(status == 1) $("#"+hiddenid).show();
	else  $("#"+hiddenid).hide();
}
function test_mail() {
	var mail_type = $('input[checkbox=mail_type][checked]').val();
    $.post('?m=admin&c=setting&a=public_test_mail&mail_to='+$('#mail_to').val(),{mail_type:mail_type,mail_server:$('#mail_server').val(),mail_port:$('#mail_port').val(),mail_user:$('#mail_user').val(),mail_password:$('#mail_password').val(),mail_auth:$('#mail_auth').val(),mail_auth:$('#mail_auth').val(),mail_from:$('#mail_from').val()}, function(data){
	alert(data);
	});
}

</script></html>