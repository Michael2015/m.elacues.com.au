<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>用户中心</title>
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
                <img src="http://www.eaorong.com/theme/eaoron/images/info/pbanner03.jpg" />
            </div>
            <!-- banner 结束-->

            <!--  内容开始 -->
            <div class="m-page">
                <div class="m-container m-user">
                    <div class="t-title">
                        <h2 id="Agency">代理查询</h2>
                        <p>Agency query</p>
                        <i></i>
                    </div>
                    <div class="g-fcenter t-imgtitle">
                        <img src="http://www.eaorong.com/theme/eaoron/images/user/user_01.jpg" />
                    </div>
                    <div class="m-search g-ohide">
                        <input type="text" placeholder="请输入手机号或微信号查询" class="search-text g-left" id="chaxun"/>
                        <input type="submit" value="" class="search-btn g-right" onclick="huoqu(1)"/>

                    </div>

                    <!-- 查询结果 -->
                        <div class="profile-box">
                             <p class="g-fcenter" id="noreply" style="display:none;color:#fff">查询无结果！</p>
                            <p class="g-fcenter" id="imgResult" style="display:none;">
                                <img src="" id="pic0" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic1" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic2" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic3" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic4" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic5" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic6" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                                <img src="" id="pic7" data-action="zoom" class="pull-left"/ style="height: 700px;margin: 3px 3px;display:none">
                            </p>
                        </div>
                    
                </div>
                <div class="m-user1">
                    <div class="m-container">
                        <div class="t-title">
                            <h2>防伪码查询</h2>
                            <p>Security code query</p>
                            <i></i>
                        </div>
                        <div class="user-box g-ohide">
                            <div class="g-left user-left">
                                <h3>
                                    <img src="http://www.eaorong.com/theme/eaoron/images/user/user_02.jpg" />
                                </h3>
                                <p>
                                    1.找到二维码和银色涂层，2.刮开涂层，用手机扫描二维码，3.扫描后，在弹出页面中输入涂层下显示的编码，4.如果正品将会提示你“验证成功”。
                                </p>
                                <p>
                                    注意：每一个验证码只能验证一次，不能重复使用，如果重复验证，页面会弹出：这个验证码已经被验证过，上一次验证时间为：XXXX-xx-xx 。
                                </p>
                            </div>
                            <img src="http://www.eaorong.com/theme/eaoron/images/user/user_03.jpg" class="g-right user-img" />
                         </div>
                    </div>

                </div>
                <div class="m-container m-user2">
                    <div class="t-title">
                        <h2>资质授权</h2>
                        <p>Qualification authorized</p>
                        <i></i>
                    </div>
                    <div class="g-fcenter">
                        <h3 class="t-imgtitle">
                            <img src="http://www.eaorong.com/theme/eaoron/images/user/user_04.jpg" />
                        </h3>
                        <div>
                            <img src="http://www.eaorong.com/theme/eaoron/images/user/user_05.jpg" />
                        </div>
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