<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>    <!DOCTYPE html>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath,bname from [!db.pre!]enewsclass where bclassid=0 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
<a href="/<?=$bqr[classpath]?>" class="g-noborder nava">
<span><?=$bqr[bname]?></span>
<em><?=$bqr[classname]?></em>
</a>
<?php
if($bqr[classid] == 3)
{
?>
<dl style="display: none;">
                                <dd><a href="/brand/anmoqi/">瘦脸按摩器</a></dd>
                                <dd><a href="/brand/rouduxiuhu/">肉毒杆菌修护原液</a></dd>
                            </dl>
<?php
}
?>
</li>
<?php
}
}
?>
 </ul>
                </div>
            </div>
            <!-- 导航 结束-->

            <!-- banner 开始 -->
            <div class="m-imgbox">
                <img src="http://www.eaorong.com/theme/eaoron/images/info/pbanner01.jpg" />
            </div>
            <!-- banner 结束-->

            <!--  内容开始 -->
            <div class="m-page">
                <div class="m-container">
                    <div class="m-wzdetail">
                        <div class="detail-title">
                            <h2><?=$ecms_gr[title]?></h2>
                            <div class="detail-bz">
                                <span>发布时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?> </span>
                                <span>作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span>
                            </div>
                        </div>
                        <div class="detail-info">
                           <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
                        </div>
                    </div>
                    <div class="lift" style="display:none">      <span>下一篇：<a href="http://www.eaorong.com/news/Company/106.html">EAORON微商达人“朱彤”，想做赢家先成为行家</a></span> </div>
                </div>
            </div>
            <!--  内容结束-->
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
</html>
