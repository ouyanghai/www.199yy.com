<?php
include("./header.php");
$id = !empty($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:1;
$res = mysql_query("select * from `tg_yangsheng` where id={$id}");
$row = mysql_fetch_assoc($res);
?>
<link rel="stylesheet" type="text/css" href="http://www.iyangsheng.com/templates/css2/sub5_news.css" />
<div class="main clearfix">
	<!--文章定位-->
    <div class="position">
    	<a href="http://www.iyangsheng.com"  target="_blank"><img src="http://www.iyangsheng.com/templates/images/sub/logo_s.png" /></a>
    	<span><a href="http://www.iyangsheng.com"  target="_blank">爱养生</a>><a ><?php echo $row['title'] ?></a></span>
    </div>
    <!--主要内容左半部分-->
    <div style="width:640px;">
    	<div class="wenzhang clearfix">
            <h2 style="text-align:center;"><a style="display:inline-block;width:100%;"><?php echo $row['title'] ?></a></h2>
            <!--时间字体大小收藏-->
            <div class="timer_box">
                <span class="timer"><?php echo $row['ctime'] ?></span>
                <span class="timer">互联网</span>
                <span class="timer">字体大小：</span>
                <span class="timer">[ 
                    <strong class="da">大</strong>
                    <strong class="zhong">中</strong>
                    <strong class="xiao">小</strong> ]
                </span>
            </div>
            <!--正文开始-->
            <?php if($row['ctype'] == 'sclxys'){ ?>
            	<div class="content" id="Zoom">
            <?php } ?>
            <?php echo $row['content'] ?>
            </div>
    	</div>       
    </div>
    <div class="width:338px;"></div>
</div>

<?php include("./footer.php"); ?>