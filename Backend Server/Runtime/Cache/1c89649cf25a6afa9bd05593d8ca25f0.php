<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title>FMScms - 后台管理中心</title><link href="__PUBLIC__/statics/css/reset.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/system.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/statics/css/table_form.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles1.css" title="styles1" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles2.css" title="styles2" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles3.css" title="styles3" media="screen" /><link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/statics/css/style/styles4.css" title="styles4" media="screen" /><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/styleswitch.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/formvalidator.js" charset="UTF-8"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/formvalidatorregex.js" charset="UTF-8"></script><script type="text/javascript">
	window.focus();
</script></head><body><style type="text/css">
	html{_overflow-y:scroll}
</style><script type="text/javascript"><!--
	$(function(){
		SwapTab('setting','on','',4,1);
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});		
		
		$("#emceededuct").formValidator({onshow:"请输入主播分成百分比",onfocus:"请输入主播分成百分比"}).inputValidator({onerror:"输入有误"}).regexValidator({regexp:"num",datatype:"enum",onerror:"分成百分比为数字"});
		$("#emceeagentdeduct").formValidator({onshow:"请输入主播代理分成百分比",onfocus:"请输入主播代理分成百分比"}).inputValidator({onerror:"输入有误"}).regexValidator({regexp:"num",datatype:"enum",onerror:"分成百分比为数字"});
		$("#payagentdeduct").formValidator({onshow:"请输入充值代理分成百分比",onfocus:"请输入充值代理分成百分比"}).inputValidator({onerror:"输入有误"}).regexValidator({regexp:"num",datatype:"enum",onerror:"分成百分比为数字"});

	})
//--></script><form action="__URL__/save_deduct/" method="post" id="myform"><input type="hidden" name="id" value="1"></input><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',4,1);">收益分成设置</li></ul><div id="div_setting_1" class="contentList pad-10"><table width="100%"  class="table_form"><tr><th>主播</th><td class="y-bg"><input type="text" class="input-text" name="emceededuct" id="emceededuct" size="5" value="<?php echo ($siteconfig['emceededuct']); ?>"/> %</td></tr><tr><th>主播代理</th><td class="y-bg"><input type="text" class="input-text" name="emceeagentdeduct" id="emceeagentdeduct" size="5" value="<?php echo ($siteconfig['emceeagentdeduct']); ?>"/> %</td></tr><tr><th>充值代理</th><td class="y-bg"><input type="text" class="input-text" name="payagentdeduct" id="payagentdeduct" size="5" value="<?php echo ($siteconfig['payagentdeduct']); ?>"/> %</td></tr></table></div><div class="bk15"></div><input name="dosubmit" type="submit" value="提交" class="button"></div></div></form></body><script type="text/javascript">function SwapTab(name,cls_show,cls_hide,cnt,cur){
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