<?php if (!defined('THINK_PATH')) exit(); if(is_array($adminmenus)): $i = 0; $__LIST__ = $adminmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span><?php echo ($vo['menuname']); ?></h3><ul><?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li id="_MP<?php echo ($sub['id']); ?>" class="sub_menu"><a href="javascript:_MP(<?php echo ($sub['id']); ?>,'<?php echo ($sub['url']); ?>');" hidefocus="true" style="outline:none;"><?php echo ($sub['menuname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endforeach; endif; else: echo "" ;endif; if($_GET['menuid'] == 1): ?><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>快捷菜单</h3><ul><?php if(is_array($adminqmenus)): $i = 0; $__LIST__ = $adminqmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="_MP<?php echo ($vo['menuid']); ?>" class="sub_menu"><a href="javascript:_MP(<?php echo ($vo['menuid']); ?>,'<?php echo ($vo['url']); ?>');" hidefocus="true" style="outline:none;"><?php echo ($vo['menuname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endif; ?><script type="text/javascript">
$(".switchs").each(function(i){
	var ul = $(this).parent().next();
	$(this).click(
	function(){
		if(ul.is(':visible')){
			ul.hide();
			$(this).removeClass('on');
				}else{
			ul.show();
			$(this).addClass('on');
		}
	})
});
</script>