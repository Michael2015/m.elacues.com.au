<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="showpage">
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=$grpagetitle?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="http://www.eaorong.com/theme/eaoron/images/main.css" rel="stylesheet" />
</head>
<body>
    <div class="m-warp">
        <div class="m-body">
            <!-- 头部 开始 -->
            <div class="m-top">
                <div class="m-container">
                    <div class="g-left">
                        <a href="/">English</a>/<a href="/about.html#contact">联系我们</a>/<strong>188-2414-9679</strong>
                    </div>
                    <div class="g-right">
                        <a href="/">官方授权</a>/<a href="#">在线客服</a>
                    </div>
                </div>
            </div>            <!-- 头部 结束-->
            <!-- 导航 开始 -->
            <div class="m-head">
                <div class="m-container">
                    <a href="index.html" class="head-logo"><img src="/skin/default/images/lacues/logo.png" /></a>
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
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td>
						<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td bgcolor="#E1EFFB">&nbsp;&nbsp;<strong><?=$ecms_gr[title]?></strong></td>
							</tr>
							<tr>
								<td><table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
										<tr>
											<td width="25"><img src="/e/data/images/mod/center_1.gif" width="25" height="24" /></td>
											<td background="/e/data/images/mod/box_1.gif">&nbsp;</td>
											<td width="25"><img src="/e/data/images/mod/center_2.gif" width="25" height="24" /></td>
										</tr>
										<tr>
											<td background="/e/data/images/mod/box_4.gif">&nbsp;</td>
											<td bgcolor="#F3F3F3"><a href="/e/ViewImg/index.html?url=<?=$ecms_gr[picurl]?>" target="_blank"><img border="0" src="<?=$ecms_gr[picurl]?>" class="photoresize" /></a></td>
											<td background="/e/data/images/mod/box_2.gif">&nbsp;</td>
										</tr>
										<tr>
											<td><img src="/e/data/images/mod/center_3.gif" width="25" height="24" /></td>
											<td background="/e/data/images/mod/box_3.gif">&nbsp;</td>
											<td><img src="/e/data/images/mod/center_4.gif" width="25" height="24" /></td>
										</tr>
								</table></td>
							</tr>
							<tr>
								<td><table width="100%" border="0" cellpadding="4" cellspacing="1">
										<tr>
											<td colspan="2" bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>图片资料</strong></td>
										</tr>
										<tr>
											<td width="80">图片名称：</td>
											<td width="462"> <?=$ecms_gr[title]?></td>
										</tr>
										<tr>
											<td bgcolor="#F8F8F8">人气：</td>
											<td bgcolor="#F8F8F8"> <?=$ecms_gr[onclick]?></td>
										</tr>
										<tr>
											<td>图片尺寸：</td>
											<td> <?=$ecms_gr[picsize]?></td>
										</tr>
										<tr>
											<td bgcolor="#F8F8F8">图片大小：</td>
											<td bgcolor="#F8F8F8"> <?=$ecms_gr[filesize]?></td>
										</tr>
										<tr>
											<td>编辑：</td>
											<td> <?=$ecms_gr[username]?></td>
										</tr>
										<tr>
											<td bgcolor="#F8F8F8">创建日期：</td>
											<td bgcolor="#F8F8F8"> <?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></td>
										</tr>
										<tr>
											<td valign="top">简介：</td>
											<td valign="top"><?=nl2br($ecms_gr[picsay])?></td>
										</tr>
								</table></td>
							</tr>
												</table>						</td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
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
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script> </ul></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>热门点击</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
					</tr>
			</table></td>
	</tr>
</table>
</div>
<!-- 尾部 开始 -->
        <div class="m-footer">
            <div class="m-container">
                <img src="/skin/default/images/lacues/footer_logo.png" class="foot-imgone g-left" />
                <img src="/skin/default/images/lacues/logo.png" class="foot-imgtwo g-left" />
                <div class="foot-info g-right">
                    <h3>关注LACUES</h3>
                    <div class="foot-bk">
                        <a href="https://m.weibo.cn/u/6390383565" class="foot-xl">新浪微博</a>
                        <a href="javascript:void(0)" class="foot-wx">微信<span class="t-span"><img src="/skin/default/images/lacues/weixin.png" /><i></i></span></a>
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
</html> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>