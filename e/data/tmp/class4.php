<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>新闻资讯</title>
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
                <img src="http://www.eaorong.com/theme/eaoron/images/info/pbanner01.jpg" />
            </div>
            <!-- banner 结束-->
            <!--  内容开始 -->
            <div class="m-page">
                <div class="m-container">
                    <div class="m-news">
                        <ul class="m-tab">
                                                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,bname,classid from [!db.pre!]enewsclass where bclassid=4 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <li><a href="/<?=$bqr[classpath]?>"  class="<?php if($bqr[classid] ==65){echo 'on';} ?>"><?=$bqr[classname]?></a></li>

<?php
}
}
?>
                         </ul>
                        
                                   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(65,1,0,0,'firsttitle=1','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>             
                        <div class="news-big g-ohide">
                            <a href="<?=$bqr['titleurl']?>" class="news-img g-left">
                                <img src="<?=$bqr['titlepic']?>" />
                            </a>
                            <a href="<?=$bqr['titleurl']?>" class="news-info g-right">
                                <h3 class="g-toverflow"><?=$bqr['title']?></h3>
                                <span>发布时间：<?=$bqr['newspath']?></span>
                                <div class="news-p">
                                    <?=$bqr['smalltext']?>
</div>
                                <span class="news-more">MORE</span>
                            </a>
                        </div>
<?php
}
}
?>

                        <ul class="news-list">                                                                                                                               
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(65,10,0,0,'firsttitle!=1','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>
                                <a href="<?=$bqsr['titleurl']?>" class="g-ohide">
                                    <div class="news-img g-left">
                                        <img src="<?=$bqr['titlepic']?>" />
                                    </div>
                                    <div class="news-info g-right">
                                        <h3 class="g-toverflow"><?=$bqr['title']?></h3>
                                        <span>发布时间：<?=$bqr['newspath']?></span>
                                        <div class="news-p">
                                            <p><?=$bqr['smalltext']?></p>
                                        </div>
                                        <span class="news-more">MORE</span>
                                    </div>
                                </a>
                            </li>
<?php
}
}
?>
                     </ul>
                    </div>
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