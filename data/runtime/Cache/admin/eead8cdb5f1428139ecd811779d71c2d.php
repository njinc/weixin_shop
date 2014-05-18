<?php if (!defined('THINK_PATH')) exit();?><!--<link rel="stylesheet" type="text/css" href="__STATIC__/weixin/css/dingcan/css.css"/>-->
<link rel="stylesheet" type="text/css" href="__STATIC__/weixin/css/dingcan/css2.css"/>
<div class="main_right">
    	<a href="#" class="addreply"><img src="__STATIC__/weixin/images/dingcan/keywords_03.jpg" /></a>
        <div class="list" id="add_zsc" style="display:none;"></div>
        <!---------回复列表-------------->
		<?php if(is_array($keyinfo)): $i = 0; $__LIST__ = $keyinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="list" style="position:relative">
        	<h3>规则：<?php echo ($item["kename"]); ?><a href="#" id="zsc_btninfo<?php echo ($item["kid"]); ?>" class="add" onclick="zsc_show('<?php echo ($item["kid"]); ?>')"></a><a href="#" class="del" id="zsc_del_<?php echo ($item["kid"]); ?>" onclick="zscdel('<?php echo ($item["kid"]); ?>')"></a></h3>
            <div id="zsc_content_<?php echo ($item["kid"]); ?>">
            	<p>关键字：<?php echo ($item["kyword"]); ?></p>
            	<?php if($item["type"] == 1): ?><p>回复：文本消息 </p><?php else: ?><p>回复：图文消息 </p><?php endif; ?>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div id="localImag"><img id="preview" width=-1 height=-1 style="diplay:none" /></div>
    </div>
</div>
</div>
<div class="showimg" style="display:none">
	<div class="stit">
    	<span>上传图片</span>
        <a href="javascript:zsc_close();"><img src="__STATIC__/weixin/images/dingcan/addpageup_06.jpg" /></a>
    </div>
    <div class="sup">
	<input type="button" value="上传图片" class="uploadbtn"/>
    <form action="<?php echo U('keyword/ajaxupload');?>" method="post" id="zsc_myform" enctype="multipart/form-data" target="yframe"><!-- target="yframe"--><!--target="yframe"-->
    	<input type="file" value="上传图片" class="uploadbtn" style="position:absolute; top:75px; left:20px; filter:alpha(pacity=0);opacity:0; z-index:999;" onchange="zsc_upload()" name="image[]" />大小不超过1M ，仅限png,jpeg,jpg
        <input type="hidden" name="sub" value="submit" /> 
    </form>
	<iframe name="yframe" src="<?php echo U('keyword/ajaxupload');?>" style="border:none; display:none;"></iframe>
    </div>
    <div class="imgbox">
   
    </div>
    <div class="sbottom"><input type="button" class="submit" id="zsc_surebtn" /></div>
     <!-----正在提交------>
    <span class="loadsubmit">正在上传...</span>
</div>
<div class="zhe" style="display:none"></div>
</body>
</html>
<script type="text/javascript" src="__STATIC__/weixin/js/dingcan/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__STATIC__/weixin/js/dingcan/addkeyword2.js"></script>