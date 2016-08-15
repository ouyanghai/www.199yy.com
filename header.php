<?php
$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
mysql_select_db("web",$command);
mysql_query("set names 'utf8'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>养生吧，生活中最专业的健康养生网站</title>
<meta name="keywords" content="养生吧网，健康网，养生网，中医养生，饮食禁忌，补肾养肾，减肥方法，穴位按摩，不孕不育，两性健康，心理健康" />
<meta name="description" content="养生吧，生活中最专业的健康养生门户网站，全方位的养生信息平台。提供最新、最专业、权威的健康养生资讯，包括中医养生，生活养生，中医疾病，养生科学，养生误区，饮食禁忌，性福药膳，四季食疗，妇科疾病，男科疾病，肝肾疾病，脾胃疾病，两性健康，两性保健等频道，为您提供最权威，最健康的养生信息服务。">
<link rel="stylesheet" href="http://www.iyangsheng.com/templates/css/dy_style.css" />
<script type="text/javascript" src="http://www.iyangsheng.com/templates/js/jquery.js"></script>
<script type="text/javascript" src="http://www.iyangsheng.com/templates/js/config.js"></script>
</head>

<body>
<div class="header clearfix">
    <h1 title="养生吧" alt="养生吧"><a href="http://www.199yy.com" target="_blank"><img class="logo" src="./images/logo.png" /></a></h1>
    <div class="ad">
        <script type="text/javascript" >BAIDU_CLB_SLOT_ID = "1095954";</script>
        <script type="text/javascript" src="http://cbjs.baidu.com/js/o.js"></script>
    </div>
</div>
<div class="clear"></div>
<div class="nav" style="background:#2799da;height:70px;line-height:18px;">
	<div class="nav_left1" style="width:50px;">
		<a style="display:inline-block;text-align:center;width:32px;" href="./index.php">
			<div class="hang" style="height:25px;">
				<h2>首</h2>
			</div>
			<div class="hang">
				<h2>页</h2>
			</div>
		</a>
	</div>
    <div class="nav_left1">
        <div class="hang">
            <h2>饮</h2>
            <span><a href="./list.php?type=bjsp" target="_blank">食谱</a></span>
            <span><a href="./list.php?type=yypcfl" target="_blank">营养</a></span>
        </div>
        <div class="hang">
            <h2>食</h2>
            <span><a href="./list.php?type=yyll" target="_blank">禁忌</a></span>
            <span><a href="./list.php?type=spyywz" target="_blank">药膳</a></span>
        </div>
    </div>
    <div class="nav_left1">
        <div class="hang">
            <h2>运</h2>
            <span><a href="./list.php?type=jkss" target="_blank">健身</a></span>
            <span><a href="./list.php?type=ws" target="_blank">武术</a></span>
        </div>
        <div class="hang">
            <h2>动</h2>
            <span><a href="./list.php?type=yujia" target="_blank">瑜伽</a></span>
            <span><a href="./list.php?type=hwzb" target="_blank">户外</a></span>
        </div>
    </div>
    <div class="nav_left2">
        <div class="hang">
            <h2>大</h2>
            <span><a href="./list.php?type=mybj" target="_blank">母婴</a></span>
            <span><a href="./list.php?type=nxbj" target="_blank">女士</a></span>
            <span><a href="./list.php?type=blbj" target="_blank">白领</a></span>
        </div>
        <div class="hang">
            <h2>众</h2>
            <span><a href="./list.php?type=nvxbj" target="_blank">男士</a></span>
            <span><a href="./list.php?type=lrbj" target="_blank">老人</a></span>
            <span><a href="./list.php?type=sclxys" target="_blank">两性</a></span>
        </div>
    </div>
    <div class="nav_left2" style="width:180px;">
        <div class="hang">
            <h2>疾</h2>
            <span><a href="./list.php?type=fkbyf" target="_blank">妇科</a></span>
            <span><a href="./list.php?type=jbhl" target="_blank">男科</a></span>
        </div>
        <div class="hang">
            <h2>病</h2>
            <span><a href="./list.php?type=xnxgjbyf" target="_blank">心脑</a></span>
            <span><a href="./list.php?type=azyf" target="_blank">肝肾</a></span>
        </div>
    </div>
    <div class="nav_left2">
        <div class="hang">
            <h2>中</h2>
            <span><a href="./list.php?type=jkjj" target="_blank">养生</a></span>
            <span><a href="./list.php?type=jlys" target="_blank">方剂</a></span>
        </div>
        <div class="hang">
            <h2>医</h2>
            <span><a href="./list.php?type=shxg" target="_blank">长寿</a></span>
            <span><a href="./list.php?type=shcs" target="_blank">特色</a></span>
        </div>
    </div>
</div>