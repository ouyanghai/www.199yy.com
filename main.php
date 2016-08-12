<?php
//妇科
$ires = mysql_query("select id,pic,title from `tg_yangsheng` where is_pic=1 and ctype='fkbyf' limit 5");
//营养
$res1 = mysql_query("select id,pic,title from `tg_yangsheng` where is_pic=1 and ctype='yypcfl' limit 5");
//药膳
$res2 = mysql_query("select id,pic,title from `tg_yangsheng` where is_pic=1 and ctype='spyywz' limit 28");
//方剂
$res3 = mysql_query("select id,title from `tg_yangsheng` where ctype='jlys' limit 18");
//禁忌
$res4 = mysql_query("select id,title,pic from `tg_yangsheng` where is_pic=1 and ctype='yyll' limit 5");
//男士
$res5 = mysql_query("select id,title from `tg_yangsheng` where ctype='nvxbj' limit 17");
//女士
$res6 = mysql_query("select id,title from `tg_yangsheng` where ctype='nxbj' limit 17");
//白领
$res7 = mysql_query("select id,title from `tg_yangsheng` where ctype='blbj' limit 10");
?>
<!--主要内容1开始-->
<div class="main clearfix">
    <div class="main1_left clearfix">
        <!--广告开始-->
        <div class="banner_box">
            <ul>
                <?php while($irow=mysql_fetch_assoc($ires)){ ?>
                <li><a href="./show.php?id=<?php echo $irow['id'] ?>" title="<?php echo $irow['title'] ?>" alt="" target="_blank"><img src="<?php echo $irow['pic'] ?>" /></a> </li>
                <?php } ?>
            </ul>
            <div class="banner_menu">
                <div><span>1</span></div>
                <div><span>2</span></div>
                <div><span>3</span></div>
                <div><span>4</span></div>
                <div><span>5</span></div>
            </div>   
        </div>
        <script>
        $(function(){
            var index=null;
            var timer=null;
            $(".banner_menu div span").eq(0).addClass("on");
            function go(){
                $(".banner_box ul li").css("z-index",1).eq(index).css("z-index",5)
                $(".banner_menu div span").removeClass("on").eq(index).addClass("on");
            }
            $(".banner_menu div").mouseover(function(){
                index=$(this).index();
                go();
            })
            function zidong(){
                if(index+1>=$(".banner_box ul li").length){
                    index=0;
                    }else{
                    index++;
                }
                go();
            }
            timer=setInterval(zidong,3000)
            $(".banner_box").hover(function(){
                clearInterval(timer);
                },function(){
                timer=setInterval(zidong,3000)
            })
        })
        </script>
        <!--广告结束-->
        <div class="left_list_box clearfix">
            <?php $row1=mysql_fetch_assoc($res1); ?>
            <h2 class="title_1"><span><a href="./list.php?id=yypcfl" target="_blank">四季养生</a></span><a href="./list.php?id=yypcfl" target="_blank" class="more">更多>></a></h2>
            <a href="./show.php?id=<?php echo $row1['id'] ?>" target="_blank" title="<?php echo $row1['title'] ?>"><img src="<?php echo $row1['pic'] ?>"/></a>
            <ul class="list1 list">
                <?php while($row1=mysql_fetch_assoc($res1)){ ?>
                <li><a href="./show.php?id=<?php echo $row1['id']?>" title="<?php echo $row1['title'] ?>" alt="<?php echo $row1['title'] ?>" target="_blank"><?php echo $row1['title'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
        
    </div>
    <div class="main1_center clearfix">
        <?php 
        for($i=0;$i<4;$i++){
            $row2=mysql_fetch_assoc($res2); $flag=1;
        ?>
        <h2 class="title_2"><a href="./show.php?id=<?php echo $row2['id']?>" title="<?php echo $row2['title'] ?>" target="_blank"><?php echo $row2['title'] ?></a></h2>
        <ul class="center_list list clearfix">
            <?php while($row2=mysql_fetch_assoc($res2)){ $flag++;?>
            <li><a target="_blank" href="./show.php?id=<?php echo $row2['id']?>" title="<?php echo $row2['title'] ?>"><?php echo $row2['title'] ?></a></li>
            <?php if($flag%7==0) break;} ?>
        </ul>
        <?php } ?>        
    </div>

    <div class="main1_right clearfix">
        <h2 class="title_1"><span><a href="./list.php?type=jlys" target="_blank">功效与作用</a></span><a href="./list.php?type=jlys" target="_blank" class="more">更多>></a></h2>
        <ul class="list list2">
            <?php while($row3=mysql_fetch_assoc($res3)){ ?>
            <li><a href="./show.php?id=<?php echo $row3['id'] ?>" title="<?php echo $row3['title'] ?>" alt="<?php echo $row3['title'] ?>" target="_blank"><?php echo $row3['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!--tab切换结束-->
</div>
<!--主要内容1结束-->
<div style="clear:both;"></div>
<!--主要内容2开始-->
<div class="main clearfix">
    <!--栏开始-->
    <div class="bar">
        <img src="http://www.iyangsheng.com/templates/images/yundong/shys.png" />
        <div class="bar_a">
            <a href="./list.php?type=bjsp" target="_blank">每日食谱</a><b></b>|
            <a href="./list.php?type=yyll" target="_blank">饮食禁忌</a><b></b>|
            <a href="./list.php?type=yypcfl" target="_blank">四季食疗</a><b></b>|
            <a href="./list.php?type=spyywz" target="_blank">性福药膳</a><b></b>
        </div>
    </div>
    <!--栏结束-->
    <div class="main2_left clearfix">
        <h2 class="title_1 h_bg"><span>
            <a href="list.php?type=bjsp" target="_blank">每日食谱</a>
            </span><a href="list.php?type=bjsp" target="_blank" class="more">更多>></a></h2>
                <a href="./show.php?id=11" title="中午吃什么好 这些食谱不能错过" alt="中午吃什么好 这些食谱不能错过" target="_blank"><img src="http://www.iyangsheng.com/img1/images/201608/10/1470815658_74824000.jpg" class="main_miaoshu_pic" /></a>
        <div class="main2_miaoshu">
            <h3><a href="./show.php?id=11" title="中午吃什么好 这些食谱不能错过" alt="" target="_blank">中午吃什么好 这些食谱不能错过</a></h3>
            <span>08-10</span>
            <p>夏末秋初吃什么？农历六月，古称长夏，此时至夏末秋初，一个显着的气候特点是雨水较多，湿气偏盛，“湿”成为长夏的主气。            </p>
        </div>
    </div>
    <div class="main2_center clearfix">
        <h2 class="title_1 h_bg"><span><a href="./list.php?type=yyll" target="_blank">饮食禁忌</a></span><a href="./list.php?type=yyll" class="more" target="_blank">更多>></a></h2>
        <div class="main2_dl_box clearfix">
            <?php while($row4=mysql_fetch_assoc($res4)){ ?>
            <dl class="main2_dl">
                <dt><a href=".show.php?id=<?php echo $row4['id'] ?>" title="<?php echo $row4['title'] ?>" target="_blank"><img src="<?php echo $row4['pic'] ?>" title="<?php echo $row4['title'] ?>"/></a></dt>
                <dd>
                    <h3><a href=".show.php?id=<?php echo $row4['id'] ?>" title="<?php echo $row4['title'] ?>" alt="<?php echo $row4['title'] ?>" target="_blank"><?php echo $row4['title'] ?></a></h3>
                    <span></span>
                </dd>
            </dl>
           <?php } ?>
        </div> 
    </div>
    <div class="main2_right clearfix">
        <div class="main2_right_box clearfix">
            <div class="box_1">
                <h2 class="title_3"><span><a href="./list.php?type=yypcfl" target="_blank">四季食疗</a></span><a href="./list.php?type=yypcfl" target="_blank" class="more">更多>></a></h2>
                <a href="./show.php?id=58" target="_blank" title="立夏至养生全攻略 多吃苦防中暑"><img src="http://www.iyangsheng.com/img1/images/201606/21/1466488237_65281500.jpg" alt="夏至养生全攻略 多吃苦防中暑"/></a>
                <h3><a href="./show.php?id=58" title="夏至养生全攻略 多吃苦防中暑" alt="夏至养生全攻略 多吃苦防中暑" target="_blank">立秋养生 祛暑滋阴养肺是关键</a></h3>
                <p><a href="./show.php?id=58" target="_blank" title="夏至养生全攻略 多吃苦防中暑">　夏至是“酷夏以至”的意思。俗话说，冬至一阳升，夏至一阴升</a></p>  
            </div>
            <div class="box_2">
                <h2 class="title_3"><span><a href="./list.php?type=spyywz" target="_blank">性福药膳</a></span><a href="./list.php?type=spyywz" target="_blank" class="more">更多>></a></h2>
                <ul class="list list2 margin_1">
                    <li><a href="./show.php?id=91" title="男人吃这物增强阴茎勃起硬度" alt="男人吃这物增强阴茎勃起硬度" target="_blank">男人吃这物增强阴茎勃起硬度</a></li>

                    <li><a href="./show.php?id=93" title="15种助性壮阳食物 激发荷尔蒙" alt="15种助性壮阳食物 激发荷尔蒙" target="_blank">15种助性壮阳食物 激发荷尔蒙</a></li>

                    <li><a href="./show.php?id=94" title="夏天最常见的壮阳菜 你吃了吗" alt="夏天最常见的壮阳菜 你吃了吗" target="_blank">夏天最常见的壮阳菜 你吃了吗</a></li>

                    <li><a href="./show.php?id=10718" title="男人早上喝水加一物 可以壮阳" alt="男人早上喝水加一物 可以壮阳" target="_blank">男人早上喝水加一物 可以壮阳</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--主要内容2结束-->

<div style="clear:both;"></div>


<!--主要内容5开始-->
<div class="main clearfix">
    <!--栏开始-->
    <div class="bar">
        <img src="http://www.iyangsheng.com/templates/images/yundong/rqys.png" />
        <div class="bar_a">
            <a href="./list.php?type=mybj" target="_blank">孕妇养生</a><b></b>|
            <a href="./list.php?type=nvxbj" target="_blank">男士养生</a><b></b>|
            <a href="./list.php?type=nxbj" target="_blank">女士养生</a><b></b>|
            <a href="./list.php?type=lrbj" target="_blank">老人养生</a><b></b>|
            <a href="./list.php?type=blbj" target="_blank">白领养生</a><b></b>|
            <a href="./list.php?type=sclxys" target="_blank">两性养生</a><b></b>
        </div>
    </div>
    <!--栏结束-->
    <div class="main2_left clearfix">
        <h2 class="title_1 h_bg"><span><a href="./list.php?type=mybj" target="_blank" title="孕妇养生" alt="孕妇养生">孕妇养生</a></span><a href="./list.php?type=mybj" target="_blank" class="more">更多>></a></h2>
        <dl class="main3_dl">
            <h3><a href="./show.php?id=7141" title="孕期保健注意预防八疾病" alt="孕期保健注意预防八疾病" target="_blank">孕期保健注意预防八疾病</a></h3>
            <dt><a href="./show.php?id=7141" title="孕期保健注意预防八疾病" alt="孕期保健注意预防八疾病" target="_blank"><img src="http://www.iyangsheng.com/img1/images/muyin/20150709/muyin_6_1_1436417114.jpg"/></a></dt>
            <dd><a href="./show.php?id=7141" title="孕期保健注意预防八疾病" alt="孕期保健注意预防八疾病" target="_blank">　　孕期是妇女生理上的一个转折点。此期间可能出现多种问题，很需要做丈夫的多了解</a></dd>
        </dl>
        <dl class="main3_dl">
            <h3><a href="./show.php?id=7142" title="女性有流产先兆怎么办" alt="女性有流产先兆怎么办" target="_blank">女性有流产先兆怎么办</a></h3>
            <dt><a href="./show.php?id=7142" title="女性有流产先兆怎么办" alt="女性有流产先兆怎么办" target="_blank"><img src="http://www.iyangsheng.com/img1/images/muyin/20150709/muyin_6_1_1436417106.jpg"/></a></dt>
            <dd><a href="./show.php?id=7142" title="女性有流产先兆怎么办" alt="女性有流产先兆怎么办" target="_blank">　　生活中有很多女性，在怀孕的时候会有这样那样的不适，甚至会出现见红的现象</a></dd>
        </dl>
        <dl class="main3_dl">
            <h3><a href="./show.php?id=7150" title="专家支招孕期如何科学控制体重" alt="专家支招孕期如何科学控制体重" target="_blank">专家支招孕期如何科学控制体重</a></h3>
            <dt><a href="./show.php?id=7150" title="专家支招孕期如何科学控制体重" alt="专家支招孕期如何科学控制体重" target="_blank"><img src="http://www.iyangsheng.com/img1/images/muyin/20150709/muyin_5_1_1436416799.jpg"/></a></dt>
            <dd><a href="./show.php?id=7150" title="专家支招孕期如何科学控制体重" alt="专家支招孕期如何科学控制体重" target="_blank">　　核心提示：现在孕期的妈妈都是皇太后般的待遇，吃是每天最重要的事情，因而孕妈咪容易体重超标</a></dd>
        </dl>
        <h3 class="main3_h"><a href="./show.php?id=7154" target="_blank" title="湿疹宝宝勤换尿布少洗澡">湿疹宝宝勤换尿布少洗澡</a></h3>
        <ul class="list list2">
            <li><a href="./show.php?id=7160" title="孕期游泳或致宝宝哮喘" target="_blank">孕期游泳或致宝宝哮喘</a></li>
            <li><a href="./show.php?id=7162" title="培养孩子良好性格的八个策略" target="_blank">培养孩子良好性格的八个策略</a></li>
            <li><a href="./show.php?id=7179" title="花茶养人孕妇忌饮六种茶" target="_blank">花茶养人孕妇忌饮六种茶</a></li>
        </ul>   
    </div>
    <div class="main2_center clearfix">
        <h2 class="title_1 h_bg"><span><a href="./list.php?type=nvxbj" target="_blank" title="男士养生" alt="男士养生">男士养生</a></span><a target="_blank" href="./list.php?type=nvxbj" class="more">更多>></a></h2>
        <?php $row5=mysql_fetch_assoc($res5)?>
       <h3 class="main3_h3"><a href="./show.php?id=<?php echo $row5['id']?>" title="<?php echo $row5['title']?>" target="_blank" alt="<?php echo $row5['title']?>"><?php echo $row5['title']?></a></h3>
        <ul class="center_list list main3_list clearfix">
            <?php while($row5=mysql_fetch_assoc($res5)){ ?>
            <li><a href="./show.php?id=<?php echo $row5['id']?>" title="<?php echo $row5['title']?>" target="_blank" alt="<?php echo $row5['title']?>"><?php echo $row5['title']?></a></li>
            <?php } ?>
        </ul>

        <h2 class="title_1 h_bg"><span><a href="./list.php?type=nxbj" title="女士养生" alt="女士养生" target="_blank">女士养生</a></span><a target="_blank" href="./list.php?type=nxbj" class="more">更多>></a></h2>
       <?php $row6=mysql_fetch_assoc($res6)?>
       <h3 class="main3_h3"><a href="./show.php?id=<?php echo $row6['id']?>" title="<?php echo $row6['title']?>" target="_blank" alt="<?php echo $row6['title']?>"><?php echo $row6['title']?></a></h3>
        <ul class="center_list list main3_list clearfix">
            <?php while($row6=mysql_fetch_assoc($res6)){ ?>
            <li><a href="./show.php?id=<?php echo $row6['id']?>" title="<?php echo $row6['title']?>" target="_blank" alt="<?php echo $row6['title']?>"><?php echo $row6['title']?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="main2_right clearfix">
        <div class="main2_right_box clearfix">
            <div class="box_4">
                <h2 class="title_3"><span><a href="./list.php?type=blbj" title="白领养生" alt="白领养生" target="_blank">白领养生</a></span><a target="_blank" href="./list.php?type=blbj" class="more">更多>></a></h2>
                <ul class="main3_paihang">
                    <?php $i = 1;while($row7=mysql_fetch_assoc($res7)){ ?>
                    <li>
                        <span class="q_1_3"><?php echo $i; ?></span>
                        <a target="_blank" href="./show.php?id=<?php echo $row7['id']?>" title="<?php echo $row7['title']?>" alt="<?php echo $row7['title']?>"><?php echo mb_substr($row7['title'],0,12,'utf-8')?></a>
                    </li>
                    <?php $i++;} ?>
                </ul>    
            </div>
            <div class="box_3">
                <h2 class="title_3"><span><a href="./list.php?type=sclxys" target="_blank">两性养生</a></span><a href="./list.php?type=sclxys" target="_blank" class="more">更多>></a></h2>
                <a href="./show.php?id=27585" target="_blank" title="{e['title']"><img src="http://www.iyangsheng.com/img1/images/201608/02/1470106673_11522500.jpg" title="翘臀女最喜欢的性爱体位：老汉推车" alt="翘臀女最喜欢的性爱体位：老汉推车" target="_blank"/></a>
                <ul class="list list2 margin_1">
                    <li><a href="/show.php?id=27585" title="翘臀女最喜欢的性爱体位：老汉推车" alt="翘臀女最喜欢的性爱体位：老汉推车" target="_blank">翘臀女最喜欢的性爱体位：老汉推车</a></li>

                    <li><a href="./show.php?id=27586" title="怎样才能在XXOO的时候让女生爽翻天" alt="怎样才能在XXOO的时候让女生爽翻天" target="_blank">怎样才能在XXOO的时候让女生爽翻天</a></li>

                    <li><a href="./show.php?id=27587" title="嘿嘿时最适用的前戏高招" alt="嘿嘿时最适用的前戏高招" target="_blank">嘿嘿时最适用的前戏高招</a></li>
                </ul>
            </div>    
        </div>
    </div>
</div>
<!--内容5结束-->
<div style="clear:both;"></div>
<!--主要内容结束-->
<div class="link clearfix" style="width:1003px;border-bottom:none;margin:0 auto;">
    <b>合作媒体:</b>
	<a target="_blank" href="http://www.qianyan001.com/" title="军事前沿网">军事前沿网</a>
	<a target="_blank" href="http://123.sogou.com/" title="搜狗网址导航">搜狗网址导航</a>
	<a target="_blank" href="http://www.2345.com/" title="2345网址导航">2345网址导航</a>
	<a target="_blank" href="http://www.369jk.com/" title="三六九健康网">三六九健康网</a>
	<a target="_blank" href="http://123.duba.net/" title="金山网址导航">金山网址导航</a>
	<a target="_blank" href="http://www.huopao.com/" title="火炮军事网">火炮军事网</a>
	<a target="_blank" href="http://www.lishizhishi.com/" title="历史知识">历史知识</a>
	<a target="_blank" href="http://www.6789.cn/" title="6789小游戏">6789小游戏</a>
	<a target="_blank" href="http://www.51yangsheng.com/" title="51养生网">51养生网</a>
	<a target="_blank" href="http://www.qiuyi.cn/" title="求医">求医</a>
	<a target="_blank" href="http://pic.iyangsheng.com/" title="美女写真">美女写真</a>
	<a target="_blank" href="http://www.iyangsheng.com/templates/about/link.html" title="更多">更多</a>
</div>