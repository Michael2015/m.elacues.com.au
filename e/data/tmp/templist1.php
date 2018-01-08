<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>[!--pagetitle--]</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
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
.m-news .news-info .news-more
{
border:1px solid #f4a78d;
}
.m-news .news-list li a:hover
{
border:1px solid #f4a78d;
}
.m-news a:hover
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
                        <a href="[!--news.url--]">English</a>/<a href="/about.html#contact">联系我们</a>/<strong>020-37417636</strong>
                    </div>
                    <div class="g-right" style="position:relative;">
                        <a href="http://gz.cngyno.com">官方授权</a>/<a href="#" class='aaaa'>在线客服</a>
                        <div style="display:none;width: 208px;height:189px;position:absolute;z-index: 1000;left: 78px;">
                             <img src="[!--news.url--]skin/default/images/lacues/qrcode.jpg" width="100%">
                        </div>
                    </div>
                </div>
            </div>            <!-- 头部 结束-->
            <!-- 导航 开始 -->
            <div class="m-head">
                <div class="m-container" id="nav_hover" data-currentid = "[!--self.classid--]">
                    <a href="index.html" class="head-logo"><img src="[!--news.url--]skin/default/images/lacues/logo.png" /></a>
                   <ul class="m-nav">
<li><a href="[!--news.url--]" class="g-noborder nava" data-classid = '0'><span>Home page</span><em>首页</em></a></li>
       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath,bname from [!db.pre!]enewsclass where bclassid=0 and showclass = 0 order by classid ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
<a href="[!--news.url--]<?=$bqr[classpath]?>" class="g-noborder nava " data-classid = "<?=$bqr[classid] ?>">
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

            <!-- banner 开始 -->
            <div class="m-imgbox">
                <img src="http://www.eaorong.com/theme/eaoron/images/info/pbanner02.jpg" />
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
     <li><a href="[!--news.url--]<?=$bqr[classpath]?>"  class="<?php if($bqr[classid] ==65){echo 'on';} ?>"><?=$bqr[classname]?></a></li>

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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(65,10,0,0,'firsttitle=0','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>
                                <a href="<?=$bqr['titleurl']?>" class="g-ohide">
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
                <img src="[!--news.url--]skin/default/images/lacues/footer_logo.png" class="foot-imgone g-left" style="witdh:315px;height:71px;padding:0;" />
                <img src="[!--news.url--]skin/default/images/lacues/logo.png" class="foot-imgtwo g-left" />
                <div class="foot-info g-right">
                    <h3>关注LACUES</h3>
                    <div class="foot-bk">
                        <a href="https://m.weibo.cn/u/6390383565" class="foot-xl">新浪微博</a>
                        <a href="javascript:void(0)" class="foot-wx">微信<span class="t-span"><img src="[!--news.url--]skin/default/images/lacues/weixin.png" /><i></i></span></a>
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