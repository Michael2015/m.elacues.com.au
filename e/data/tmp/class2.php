<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>关于我们</title>
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

            <!-- banner 开始 -->
            <div class="m-imgbox">
                <img src="http://www.eaorong.com/theme/eaoron/images/test/banner2.jpg" />
            </div>
            <!-- banner 结束-->

            <!--  内容开始 -->
            <div class="m-page">
                <div class="m-container">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(60,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div class="t-title">
                       <h2><?=$class_r[$bqr[classid]][classname]?></h2>
                        <p><?=$bqsr[classname]?></p>
                        <i></i>
                    </div>
                </div>
                <div class="m-about1">
                    <div class="m-container">
                        <div class="about-box">
                            <img src="http://www.eaorong.com/theme/eaoron/images/about/about02.jpg" />
<?php
$fr=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_{$bqr[stb]} where id='84' order by id desc");
?>
<?=$fr[newstext]?>

                        </div>
                    </div>
<?php
}
}
?>
                </div>
                <div class="m-container">
                    <div class="t-title">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(64,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <h2><?=$class_r[$bqr[classid]][classname]?></h2>
                        <p><?=$bqsr[classname]?></p>
<?php
}
}
?>
                        <i></i>
                    </div>
                </div>
                <div class="m-about2">
                    <ul>
<li style="background:url(http://www.eaorong.com/theme/eaoron/images/about/about04.jpg) no-repeat center;background-size:cover;">
                            <a href="javascript:void(0)">
                                <div class="about-box">
                                    <div class="about-box2">
                                        <img src="http://www.eaorong.com/theme/eaoron/images/about/about08.png" />
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li style="background:url(http://www.eaorong.com/theme/eaoron/images/about/about04.jpg) no-repeat center;background-size:cover;">
                            <a href="javascript:void(0)">
                                <div class="about-box">
                                    <div class="about-box2">
                                        <img src="http://www.eaorong.com/theme/eaoron/images/about/about08.png" />
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li style="background:url(http://www.eaorong.com/theme/eaoron/images/about/about05.jpg) no-repeat center;background-size:cover;">
                            <a href="javascript:void(0)">
                                <div class="about-box">
                                    <div class="about-box2">
                                        <img src="http://www.eaorong.com/theme/eaoron/images/about/about09.png" />
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li style="background:url(http://www.eaorong.com/theme/eaoron/images/about/about06.jpg) no-repeat center;background-size:cover;">
                            <a href="javascript:void(0)">
                                <div class="about-box">
                                    <div class="about-box2">
                                        <img src="http://www.eaorong.com/theme/eaoron/images/about/about10.png" />
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="m-container">
                    <div class="t-title">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(61,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                           <h2><?=$class_r[$bqr[classid]][classname]?></h2>
                        <p><?=$bqsr[classname]?></p>
<?php
}
}
?>
                        <i></i>
                    </div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(61,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$fr=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_{$bqr[stb]} where id='$bqr[id]'  order by id asc");
?>

                    <div class="m-about3 g-ohide">
                        <img src="<?=$bqr[titlepic]?>" class="g-left about-img" style="margin-top:10px;" />
<div class="about-box g-left">
                       <?=$fr[newstext]?>
</div>
                    </div>
<?php
}
}
?>
                </div>


                <div class="m-about4">
                    <div class="m-container">
 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(62,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <div class="t-title">
                           <h2><?=$class_r[$bqr[classid]][classname]?></h2>
                        <p><?=$bqsr[classname]?></p>

                            <i></i>
                        </div>
                        <img src="<?=$bqr[titlepic]?>" />
<?php
}
}
?>
                    </div>
                </div>
                <div class="m-container" id="contact">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(63,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div class="t-title">
                           <h2><?=$class_r[$bqr[classid]][classname]?></h2>
                        <p><?=$bqsr[classname]?></p>
                        <i></i>
                    </div>
                    <div class="g-ohide m-about5">
                        <div class="g-left about-left">
                            <img src="<?=$bqr[titlepic]?>" />
                        </div>
                        <div class="g-right about-right">
<?php
$fr=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_{$bqr[stb]} where id='$bqr[id]'  order by id asc");
?>
                            <?=$fr[newstext]?>
                        </div>
                    </div>
<?php
}
}
?>
                </div>
            </div>
            <!--  内容结束-->
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