<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类信息 - Powered by EmpireCMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="channle">
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>分类信息</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://www.eaorong.com/theme/eaoron/images/main.css" rel="stylesheet" />
</head>
<body>
    <div class="m-warp">
        <div class="m-body">
            <!-- 头部 开始 -->
            <div class="m-top">
                <div class="m-container">
                    <div class="g-left">
                        <a href="http://www.eaoron.com.au/">English</a>/<a href="/about.html#contact">联系我们</a>/<strong>400-8010-640</strong>
                    </div>
                    <div class="g-right">
                        <a href="/user.html#Agency">官方授权</a>/<a href="#">在线客服</a>
                    </div>
                </div>
            </div>            <!-- 头部 结束-->
            <!-- 导航 开始 -->
            <div class="m-head">
                <div class="m-container">
                    <a href="index.html" class="head-logo"><img src="http://www.eaorong.com/theme/eaoron/images/logo/top_logo.png" /></a>
                   <ul class="m-nav">
<li><a href="/" class="g-noborder nava on"><span>Home page</span><em>首页</em></a></li>
       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,bname from [!db.pre!]enewsclass where bclassid=0 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="/<?=$bqr[classpath]?>" class="g-noborder nava"><span><?=$bqr[bname]?></span><em><?=$bqr[classname]?></em></a></li>

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
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：<a href="/index.html">首页</a>&nbsp;>&nbsp;<a href="/info/">分类信息</a></td>
</tr>
</table>
<? @sys_ForSonclassData('selfinfo',5,38,0,0,7,0,0);?></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>分类信息搜索</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="6">
<input type="hidden" name="tbname" value="info">
<input type="hidden" name="tempid" value="1">
<tr>
<td><input name="keyboard" type="text" class="inputText" id="keyboard" size="18" />
<select name="show">
<option value="title,smalltext,myarea" selected="selected">不限</option>
<option value="title">信息标题</option>
<option value="smalltext">信息内容</option>
<option value="myarea">所在地</option>
</select></td>
</tr>
<tr>
<td><select name="classid">
<option value='9'>所有分类</option>
<option value='10'>|-房屋信息</option>
<option value='11' >&nbsp;&nbsp;|-房屋求租</option>
<option value='12' >&nbsp;&nbsp;|-房屋出租</option>
<option value='13' >&nbsp;&nbsp;|-房屋求购</option>
<option value='14' >&nbsp;&nbsp;|-房屋出售</option>
<option value='15' >&nbsp;&nbsp;|-办公用房</option>
<option value='16' >&nbsp;&nbsp;|-旺铺门面</option>
<option value='17'>|-跳蚤市场</option>
<option value='18' >&nbsp;&nbsp;|-电脑配件</option>
<option value='19' >&nbsp;&nbsp;|-电器数码</option>
<option value='20' >&nbsp;&nbsp;|-通讯产品</option>
<option value='21' >&nbsp;&nbsp;|-居家用品</option>
<option value='22'>|-同城生活</option>
<option value='23' >&nbsp;&nbsp;|-本地新闻</option>
<option value='24' >&nbsp;&nbsp;|-购物打折</option>
<option value='25' >&nbsp;&nbsp;|-旅游活动</option>
<option value='26' >&nbsp;&nbsp;|-便民告示</option>
<option value='27'>|-求职招聘</option>
<option value='28' >&nbsp;&nbsp;|-工程技术</option>
<option value='29' >&nbsp;&nbsp;|-财务会计</option>
<option value='30' >&nbsp;&nbsp;|-餐饮行业</option>
<option value='31' >&nbsp;&nbsp;|-经营管理</option>
</select>
<input name="Submit2" type="image" value="搜索" src="/skin/default/images/search.gif" />　
[<a href="/e/DoInfo/ChangeClass.php?mid=8" target="_blank">发布信息</a>]</td>
</tr>
</table>
</form></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>地区导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=东城区">东城区</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=西城区">西城区</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=通州区">通州区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=崇文区">崇文区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=宣武区">宣武区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=大兴区">大兴区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" /><a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=朝阳区">&nbsp;朝阳区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=海淀区">海淀区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=昌平区">昌平区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=丰台区">丰台区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=石景山区">石景山区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=其它">其它</a></td>
	</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>分类导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=10"><strong>房屋信息</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=11">房屋求租</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=12">房屋出租</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=15">办公用房</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=13">房屋求购</a></td>
    <td><a href="/e/action/ListInfo/?classid=14">房屋出售</a></td>
  		<td><a href="/e/action/ListInfo/?classid=16">旺铺门面</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=17"><strong>跳蚤市场</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=18">电脑配件</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=19">电器数码</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=21">居家用品</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=20">通讯产品</a></td>
    <td><a href="/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=22"><strong>同城生活</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=23">本地新闻</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=24">购物打折</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=26">便民告示</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=25">旅游活动</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=27"><strong>求职招聘</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=28">工程技术</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=29">财务会计</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=31">经营管理</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=30">餐饮行业</a></td>
    <td><a href="/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
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
                <img src="http://www.eaorong.com/theme/eaoron/images/logo/foot_logo.png" class="foot-imgone g-left" />
                <img src="http://www.eaorong.com/theme/eaoron/images/logo/top_logo.png" class="foot-imgtwo g-left" />
                <div class="foot-info g-right">
                    <h3>关注EAORON</h3>
                    <div class="foot-bk">
                        <a href="http://weibo.com/eaoron" class="foot-xl">新浪微博</a>
                        <a href="javascript:void(0)" class="foot-wx">微信<span class="t-span"><img src="http://www.eaorong.com/theme/eaoron/images/test/erweima.jpg" /><i></i></span></a>
                    </div>
                    <p>Australian United Pharmaceuticals Pty Ltd</p>
                    <strong>4008-010-640</strong>
                </div>
            </div>
        </div>
<div style="display:none"><script src="https://s22.cnzz.com/z_stat.php?id=1262215559&web_id=1262215559" language="JavaScript"></script></div>
        <!-- 尾部 结束 -->
    </div>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.cycle2.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/main.js"></script>
</body>
</html>
</body>
</html>