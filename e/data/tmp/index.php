<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>lacues中国官网</title>
<meta name="keywords" content="Lacues，瘦脸按摩器，肉毒杆菌修护原液" />
<meta name="description" content="涵耀（国际）控股集团有限公司由创始人王少涵在香港成立，是一家集研发/生产/销售/进出口为一体的综合生物科技企业。涵耀集团和澳洲一线护肤品牌Lacues达成战略合作，成为Lacues品牌的首席运营方。" />
<link href="http://www.eaorong.com/theme/eaoron/images/main.css" rel="stylesheet" />
</head>
<style>
.m-nav li .on
{
color:#f4a78d;
}
.m-tab li a:hover
{
background:#f4a78d!important;
}
.m-tab li .on
{
background:#f4a78d!important;
}
.m-tab li a
{
color:#f4a78d;
border:1px solid #f4a78d;
}
.m-inxnews .news-info h3,.m-inxabout .about-left a,.m-news .news-info .news-more,.m-news .news-big .news-info h3
{
color:#f4a78d;
}

</style>
<body>
    <div class="m-warp">
        <div class="m-body">
            <!-- 头部 开始 -->
            <div class="m-top">
                <div class="m-container">
                    <div class="g-left">
                        <a href="/">English</a>/<a href="/about.html#contact">联系我们</a>/<strong>020-37417636</strong>
                    </div>
                    <div class="g-right" style="position:relative;">
                        <a href="http://gz.cngyno.com">官方授权</a>/<a href="#" class='aaaa'>在线客服</a>
                        <div style="display:none;width: 208px;height:189px;position:absolute;z-index: 1000;left: 78px;">
                             <img src="/skin/default/images/lacues/qrcode.jpg" width="100%">
                        </div>
                    </div>
                </div>
            </div>            <!-- 头部 结束-->
            <!-- 导航 开始 -->
            <div class="m-head">
                <div class="m-container" id="nav_hover" data-currentid = "0">
                    <a href="index.html" class="head-logo"><img src="/skin/default/images/lacues/logo.png" /></a>
                   <ul class="m-nav">
<li><a href="/" class="g-noborder nava" data-classid = '0'><span>Home page</span><em>首页</em></a></li>
       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath,bname from [!db.pre!]enewsclass where bclassid=0 and showclass = 0 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
<a href="/<?=$bqr[classpath]?>" class="g-noborder nava " data-classid = "<?=$bqr[classid] ?>">
<span><?=$bqr[bname]?></span>
<em><?=$bqr[classname]?></em>
</a>
<?php
if($bqr[classid] == 3)
{
?>
<dl style="display: none;">
                                <dd><a href="/brand/anmoqi/">瘦脸按摩器<?=$class_r[ID]['classname']?></a></dd>
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
<style>
.cycle-pager span
{
border-radius:12px;
background:url(/skin/default/images/lacues/dot_white.png) no-repeat center!important;
}
.cycle-pager .cycle-pager-active
{
background:url(/skin/default/images/lacues/dot_logo.png) no-repeat center!important;
}
.about-top,.about-left h3,.about-title
{
color:#f4a78d!important;
}

</style>
            <!-- banner 开始 -->
            <div class="m-banner cycle-slideshow" data-cycle-slides=".banner-img">                
<a class="banner-img" style="background:url(/skin/default/images/lacues/carousel_1.jpg) no-repeat center;"></a>                
<a class="banner-img" style="background:url(/skin/default/images/lacues/carousel_2.jpg) no-repeat center;"></a>                
<a class="banner-img" style="background:url(/skin/default/images/lacues/carousel_3.jpg) no-repeat center;"></a>                
<div class="cycle-pager"></div>
                <div class="cycle-next"></div>
                <div class="cycle-prev"></div>
            </div>            <!-- banner 结束-->

            <!--  公司介绍开始 -->
            <div class="m-inxabout">
                <div class="m-container g-ohide">
                    <div class="g-left about-left">
                        <div class="about-title">
                            <h2>INTRODUCE</h2>
                            <p>公司介绍</p>
                        </div>
                        <div class="about-top">关于<strong>"LACUES"</strong></div>
                        <h3>LACUES</h3>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(60,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$fr=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_{$bqr[stb]} where id='84' order by id desc");
?>
<?=$fr[newstext]?>
<?php
}
}
?>
                        <a href="about.html">了解更多>></a>
                    </div>
                    <div class="g-left about-right">
                        <img src="http://www.eaorong.com/theme/eaoron/images/test/test01.jpg" />
                    </div>
                </div>
            </div>
            <!--  公司介绍结束-->
            <!--  新闻开始 -->
            <div class="m-inxnews">
                <div class="m-container g-ohide">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(65,2,0,0,'firsttitle=1 or firsttitle=0','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
                 <div class="g-left g-ohide" style="margin:0 20px;">
                        <a href="<?=$bqr['titleurl']?>" class="news-img g-left">
                            <img src="<?=$bqr['titlepic']?>" />
                        </a>
                        <a href="<?=$bqr['titleurl']?>" class="news-info g-left">
                            <h3 class="g-toverflow"><?=$bqr['title']?></h3>
                            <span>发布时间：<?=$bqr['newspath']?></span>
                            <p class="g-toverflow2"><?=$bqr['smalltext']?></p>
                        </a>
                    </div>   
             <?php
}
}
?>
               </div>
            </div>
            <!--  新闻结束-->
        </div>
<!-- 尾部 开始 -->
        <div class="m-footer">
            <div class="m-container">
                <img src="/skin/default/images/lacues/footer_logo.png" class="foot-imgone g-left" style="witdh:315px;height:71px;padding:0;" />
                <img src="/skin/default/images/lacues/logo.png" class="foot-imgtwo g-left" />
                <div class="foot-info g-right">
                    <h3>关注LACUES</h3>
                    <div class="foot-bk">
                        <a href="https://m.weibo.cn/u/6390383565" class="foot-xl">新浪微博</a>
                        <a href="javascript:void(0)" class="foot-wx">微信<span class="t-span"><img src="/skin/default/images/lacues/weixin.png" /><i></i></span></a>
                    </div>
                    <p>Han-Yao International Holding Group</p>
                    <strong>020-37417636</strong>
                </div>
            </div>
        </div>
        <!-- 尾部 结束 -->
    </div>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/jquery.cycle2.js"></script>
    <script src="http://www.eaorong.com/theme/eaoron/images/main.js"></script>

<script>
var current_id = $('#nav_hover').data('currentid');
$('#nav_hover ul li').each(function(){
var classid  = $(this).find('.g-noborder').data('classid');
if(classid  == current_id )
{
$(this).find('a').addClass('on');
}

});

$('.aaaa').hover(function(){
$(this).next().show();
},function(){
$(this).next().hide();
});

</script>
</body>
</html>
