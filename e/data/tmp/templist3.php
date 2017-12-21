<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>[!--pagetitle--]</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="http://www.eaorong.com/theme/eaoron/images/main.css" rel="stylesheet" />
</head>
<body>
    <div class="m-warp">
        <div class="m-body">
            <!-- 头部 开始 -->
            <div class="m-top">
                <div class="m-container">
                    <div class="g-left">
                        <a href="[!--news.url--]">English</a>/<a href="/about.html#contact">联系我们</a>/<strong>188-2414-9679</strong>
                    </div>
                    <div class="g-right">
                        <a href="/">官方授权</a>/<a href="#">在线客服</a>
                    </div>
                </div>
            </div>            <!-- 头部 结束-->
            <!-- 导航 开始 -->
            <div class="m-head">
                <div class="m-container">
                    <a href="index.html" class="head-logo"><img src="[!--news.url--]skin/default/images/lacues/logo.png" /></a>
                   <ul class="m-nav">
<li><a href="[!--news.url--]" class="g-noborder nava on"><span>Home page</span><em>首页</em></a></li>
       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,bname from [!db.pre!]enewsclass where bclassid=0 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="[!--news.url--]<?=$bqr[classpath]?>" class="g-noborder nava"><span><?=$bqr[bname]?></span><em><?=$bqr[classname]?></em></a></li>

<?php
}
}
?>
 </ul>
                </div>
            </div>
            <!-- 导航 结束-->
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td colspan="3" class="photo_list">
[!--empirenews.listtemp--]
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="line_bottom">
	<tr>
		<td width="25%" valign="top"><!--list.var1--></td>
		<td width="25%" valign="top"><!--list.var2--></td>
		<td width="25%" valign="top"><!--list.var3--></td>
		<td width="25%" valign="top"><!--list.var4--></td>
	</tr>
</table>
[!--empirenews.listtemp--]
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list_page">
<tr>
<td>[!--show.page--]</td>
</tr>
</table></td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>图片推荐</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?>
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?>
</ol></td>
</tr>
</table></td>
</tr>
</table>
</div>
<!-- 尾部 开始 -->
        <div class="m-footer">
            <div class="m-container">
                <img src="[!--news.url--]skin/default/images/lacues/footer_logo.png" class="foot-imgone g-left" />
                <img src="[!--news.url--]skin/default/images/lacues/logo.png" class="foot-imgtwo g-left" />
                <div class="foot-info g-right">
                    <h3>关注LACUES</h3>
                    <div class="foot-bk">
                        <a href="https://m.weibo.cn/u/6390383565" class="foot-xl">新浪微博</a>
                        <a href="javascript:void(0)" class="foot-wx">微信<span class="t-span"><img src="[!--news.url--]skin/default/images/lacues/weixin.png" /><i></i></span></a>
                    </div>
                    <p>Han-Yao International Holding Group</p>
                    <strong>188-2414-9679</strong>
                </div>
            </div>
        </div>
        <!-- 尾部 结束 -->
    </div>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.cycle2.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/main.js"></script>
</body>
</html>
</body>
</html>