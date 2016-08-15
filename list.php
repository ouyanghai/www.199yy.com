<?php 
include("./header.php"); 
/*
$sql="delete from `tg_yangsheng` where id in (select * from (select max(id) from `tg_yangsheng` group by ctime having count(ctime)>1)as b)";
mysql_query($sql);exit;
*/

$ctype=!empty($_GET['type'])?$_GET['type']:'bjsp';

switch ($ctype) {
    case 'jkss':
        $ctype="ctype='jkss' or ctype='fj' or ctype='sf' or ctype='xj'";
        break;
    case 'ws' :
        $ctype="ctype='hwzb' or ctype='qg' or ctype='rq' ";
        break;
    case 'yujia':
        $ctype="ctype='hwzb' or ctype='fx' or ctype='sb' or ctype='sl' or ctype='sy' or ctype='tt' ";
        break;
    case 'hwzb':
        $ctype="ctype='hwzb' or ctype='hwgl' or ctype='tj'";
        break;
    default:
        $ctype="ctype='{$ctype}'";
        break;
}

$p_no = 10;
$nsql = "select count(id) from `tg_yangsheng` where {$ctype}";
//echo $nsql;exit;
$nres = mysql_query("select count(id) from `tg_yangsheng` where {$ctype}");
$prow = mysql_fetch_row($nres);
$size = $prow[0];
$pages = ceil($size/$p_no);
$cur_page = (!empty($_GET['page'])&&is_numeric($_GET['page']))?($_GET['page']>=1&& $_GET['page']<=$pages ? $_GET['page'] : 1):1;
$p_start = ($cur_page-1)*$p_no;
$lres = mysql_query("select * from `tg_yangsheng` where {$ctype} order by ctime desc limit {$p_start},{$p_no}");

$rres = mysql_query("select id,title,pic,ctime from `tg_yangsheng` where is_pic=1 limit 5");
?>
<link rel="stylesheet" href="./css/list.css" />
<div class="mainbox">
    <div class="breadnav">
        <a href="./index.php">养生吧</a>
    </div>
    <div class="leftbox" style="margin-top:10px">
        <div class="fl terminal_holder"><!--articel end-->
            <?php while($lrow = mysql_fetch_assoc($lres)){ ?>
            <div class="leibiao_hotm">
                <div class="leibiao_hotm_a"> 
                    <a href="./show.php?id=<?php echo $lrow['id'] ?>"  title="<?php echo $lrow['title'] ?>" target="_blank">
                    <?php if(!empty($lrow['is_pic'])){ ?>
                    <img src="<?php echo $lrow['pic'] ?>" alt="<?php echo $lrow['title'] ?>" width="210" height="150">
                    <?php } ?>
                    </a>
                </div>
                <div class="leibia_hotm_b">
                    <h2><a title="<?php echo $lrow['title'] ?>" href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank"><?php echo $lrow['title'] ?></a></h2>
                    <div class="tLDate"> 
                        <span><?php echo $lrow['ctime'] ?></span>
                    </div>
                    <p class="leibiao_top">
                    <?php 
                    $patt = "/BAIDU_CLB_SLOT_ID = \"865743\";/";
                    echo mb_substr(preg_replace($patt,'',strip_tags($lrow['content'])),0,100,'utf-8');

                    ?>
                    ..</p>
                </div>  
            </div>
            <?php } ?>
    	  </div>    
        <div class="pagination">
          <ul style="width:600px;">
            <?php if($cur_page == 1){ ?>
            <a disabled="disabled">首页</a>
            <a disabled="disabled" style="width:50px;">上一页</a>
        <?php }else{ ?>
            <a href="/list.php?page=1<?php echo '&type='.$type ?>">首页</a>
            <a href="/list.php?page=<?php echo ($cur_page-1).'&type='.$type; ?>" style="width:50px;">上一页</a>
        <?php } ?>
        <?php 
            $s_page = $cur_page-4>0?$cur_page-4:1;
            $e_page = $cur_page+4>$pages?$pages:$cur_page+4;
            for($i=$s_page;$i<=$e_page;$i++){
                if($i == $cur_page){
                    echo "<a href='#' class='bg_page'>".$i.'</a>';
                }else{ ?> 
                    <a href='/list.php?page=<?php echo $i.'&type='.$type;?>'><?php echo $i;?></a>   
        <?php }} ?>
        
        <?php if($pages == $cur_page){ ?>
            <a disabled="disabled" style="width:50px;">下一页</a>
            <a disabled="disabled">尾页</a>
        <?php }else{ ?>
            <a href="/list.php?page=<?php echo ($cur_page+1).'&type='.$type; ?>" style="width:50px;">下一页</a>
            <a href="/list.php?page=<?php echo $pages.'&type='.$type; ?>">尾页</a>
        <?php } ?>      
          </ul>
        </div>
    </div>
    <div class="right_gug">
        <?php if($type=='bjsp'){ ?>
        <div class="right_paih_b" style="margin-top:10px;height:340px;">
            <div style="width:338px;">
                <script type="text/javascript" src="http://i.haodianpu.com/show.php?aid=59&param=338*338"></script>  
            </div>
        </div>
        <?php } ?>
        <div class="right_paih_b" style="margin-top:10px">
            <span class="temar3">
              热门观点
              
            </span>
            <?php while($rrow=mysql_fetch_assoc($rres)){ ?>
        		<div class="right_xiao">
                <div class="right_xiaob">
                    <a href="./show.php?id=<?php echo $rrow['id'] ?>" target="_blank" title="<?php echo $rrow['title'] ?>"><img src="<?php echo $rrow['pic'] ?>" width="98" height="70" alt="<?php echo $rrow['title'] ?>" /></a>
                </div>
                <div class="right_xiaoc">
                    <ul>
                        <li><a href="./show.php?id=<?php echo $rrow['id'] ?>" title="<?php echo $rrow['title'] ?>"><?php echo $rrow['title'] ?></a></li>
                        <li><?php echo $rrow['title'] ?>..</li>
                        <li><?php echo $rrow['ctime'] ?></li>
                    </ul>
                </div>
            </div>
				    <?php } ?>
		    </div>
    </div>
    <div class="clear"></div>
</div>

<?php include("./footer.php"); ?>