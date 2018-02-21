<?php if (!defined('THINK_PATH')) exit();?>

<html>
    <head><title>
        </title>
        <script type="text/javascript">
        </script>
        <style type="text/css">
            a:hover { text-decoration:underline; }
            ul, li { list-style:none; }
            fieldset, img { border:none; }
            #hotnews { width:1000px; margin:10px; margin-left:auto; margin-right:auto;font-size:18px;}
            #hotnews_caption { width:1000px; overflow:hidden; border-bottom:10px solid #93bee2; }
            #hotnews_caption ul { float:left; }
            #hotnews_caption ul li { float:left; border-left:10px solid #faebd7; width:130px; line-height:40px; text-align:center; cursor:pointer;font-size:18px; }
            #hotnews_caption .normal { background:#ebf8a4; }
            #hotnews_caption .current{ background:#C2130E; color:#FFF; }
            #hotnews_content {}
            #hotnews_content .normal { display:none;}
            #hotnews_content .current { display:block; }
            #hotnews_content ul { padding:1px 0 0 5px; }
            #hotnews_content ul li a { font-size:18px;letter-spacing:1pt;line-height:14pt;background: #faebd7;}
        </style>
        <script type="text/javascript">
            function secBoard(elementID, listName, n) {
                var elem = document.getElementById(elementID);
                var elemlist = elem.getElementsByTagName("li");
                for (var i = 0; i < elemlist.length; i++) {
                    elemlist[i].className = "normal";
                    var m = i + 1;
                    document.getElementById(listName + "_" + m).className = "normal";
                }
                elemlist[n - 1].className = "current";
                document.getElementById(listName + "_" + n).className = "current";
            }
            function secdBoard(elementID, listName, n) {
                var elem = document.getElementById(elementID);
                var elemlist = elem.getElementsByTagName("li");
                for (var i = 0; i < elemlist.length; i++) {
                    elemlist[i].className = "normal2";
                    var m = i + 1;
                    document.getElementById(listName + "_" + m).className = "normal2";
                }
                elemlist[n - 1].className = "main";
                document.getElementById(listName + "_" + n).className = "main";
            }
        </script>
        <script type="text/javascript">
            function sBoard(elementID, listName, n) {
                var elem = document.getElementById(elementID);
                var elemlist = elem.getElementsByTagName("li");
                for (var i = 0; i < elemlist.length; i++) {
                    elemlist[i].className = "normal2";
                    var m = i + 1;
                    document.getElementById(listName + "_" + m).className = "normal2";
                }
                elemlist[n - 1].className = "main";
                document.getElementById(listName + "_" + n).className = "main";
            }
        </script>
    </head>

    <body bgcolor="#faebd7">
    <?php if($_SESSION['user'] == null): ?><table width="1024" height="40" align="center">
    <tr>
        <td background="__PUBLIC__/images/8.jpg">
            <table valign="middle" align="left">

                <tr>
                    <td><img src="__PUBLIC__/images/3.gif"></td>
                    <td><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.pwtc.com:8086/index.php/Index/index');" href="#">设为首页</a></td>
                    <td>&nbsp;</td>
                    <td><img src="__PUBLIC__/images/4.gif"></td>
                    <td><a href="javascript:window.external.addFavorite('http://www.pwtc.com:8086/index.php/Index/index','平武特产网站');">加入收藏</a></td>
                </tr>

            </table>
            <table valign="middle" align="right">

                <tr align="right">
                    <td align="right"><img src="__PUBLIC__/images/5.gif"></td>
                    <td id="top_login_span" align="right"><div class="user fl">
                            <ul>
                                <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                                        <style type="text/css">
                                            #ECS_MEMBERZONE a{float:left; margin-right:5px;}
                                            #ECS_MEMBERZONE font{float:left;}
                                            #ECS_MEMBERZONE span{float:left;}
                                        </style>
                                        <span>您好 欢迎光临平武特产网&nbsp;</span>
                                        <a href="__APP__/Index/login" style="color:#F00; "> 【登录】</a>
                                        <a href="__APP__/Index/tongyizc" style="color:#F00; ">【注册】</a></font>
                                
                            </ul>
                        </div></td></tr></table>
        </td>
    </tr>
</table>
        <?php else: ?><table width="1024" height="40" align="center">
    <tr>
        <td background="__PUBLIC__/images/8.jpg">
            <table valign="middle" align="left">

                <tr>
                    <td><img src="__PUBLIC__/images/3.gif"></td>
                    <td><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.pwtc.com:8086/index.php/Index/index');" href="#">设为首页</a></td>
                    <td>&nbsp;</td>
                    <td><img src="__PUBLIC__/images/4.gif"></td>
                    <td><a href="javascript:window.external.addFavorite('http://www.pwtc.com:8086/index.php/Index/index','平武特产网站');">加入收藏</a></td>
                </tr>

            </table>
            <table valign="middle" align="right">

                <tr align="right">
                    <td align="right"><img src="__PUBLIC__/images/5.gif"></td>
                    <td id="top_login_span" align="right"><div class="user fl">
                            <ul>
                                <div id="append_parent">
                                        <style type="text/css">
                                            #ECS_MEMBERZONE a{float:left; margin-right:5px;}
                                            #ECS_MEMBERZONE font{float:left;}
                                            #ECS_MEMBERZONE span{float:left;}
                                        </style>
                                        当前用户：【<font color="red"><?php echo ($_SESSION['user']); ?></font>】&nbsp;&nbsp;【<font color="blue"><a href="__APP__/Index/logout">退出登录</a></font>】</div>                                    
                            
                        </div></ul></td></tr></table>
        </td>
    </tr>
</table><?php endif; ?>
    ﻿<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>平武特产网站</title>
    <link href="__ROOT__/Public/css/cssreset.css" rel="stylesheet">
    <link href="__ROOT__/Public/css/main.css" rel="stylesheet">
</head>

<script language="javascript">
    function chkinput1(form){
        if(form.name.value==""||form.name.value=="请输入关键词"){
            alert("请输入商品名称!");
            form.name.select();
            return(false);
        }
        return(true);
    }
</script>

<body>
    
<table width="1024" height="90" align="center">
    <tr>
        <td width="242" height="84"><img src="__PUBLIC__/images/pingwu.jpg" width="242" height="84" /></td>
        <td width="283"><img src="__PUBLIC__/images/shitopadamd.jpg" width="283" height="84" /></td>
        <td width="490"><img src="__PUBLIC__/images/tejia.jpg" width="490" height="82" /></td>
    </tr>
</table>

<table width="1024" align="center" bgcolor="#ffe4e1">
    <form name="form" method="post" action="__APP__/Index/search" onSubmit="return chkinput1(this)">
        <tr>
            <td  background="__PUBLIC__/images/top1.jpg" height="50" width="1024" align="right">
                <div align="right">&nbsp;
                    <span><font color="#483d8b" style="font-size: 18px;">搜索商品：</font></span>
                    <input type="text" name="goods_name" size="25" class="inputcss" style="background-color:#e8f4ff;font-size: 16px;" value="请输入关键词" onfocus="if(this.value=='请输入关键词') this.value='';" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.background='#bbbbbb'">
                    <input name="submit" type="submit" class="buttoncss" value="立即查找" style="height:30px;width:80px;display:inline-block;">
                </div>
            </td>
        </tr>
    </form>
</table>

    <table width="1024" height="40" align="center" bgcolor="#dc143c">
        <tr align="center">
            <td width="170" align="center">&nbsp;
                <a href="__APP__/Index/index" style=" color:black;font-size: 22px;">本站首页</a></td>
            <td width="170" align="center">&nbsp;
                 <a href="__APP__/Index/showrecomend" style=" color:black;font-size: 22px;">推荐商品</a></td>
            <td width="170" align="center">&nbsp;
                <a href="__APP__/Index/usercenter" style=" color:black;font-size: 22px;">用户中心</a></td>
            <td width="170" align="center">&nbsp;
                <a href="__APP__/Index/aboutus" style=" color:black;font-size: 22px;">关于我们</a></td>
            <td width="170" align="center">&nbsp;
                <a href="__APP__/Order/findddForm" style=" color:black;font-size: 22px;">订单查询</a></td>
            <td width="174" align="center">&nbsp;
                <a href="#" style=" color:black;font-size: 22px;">我的购物车</a>
            </td>
    </tr>
    </table>



</body>
</html>
    <table align="center">
        <tr>
            <td>
                <table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="1024" valign="top" bgcolor="#FFFFFF">
                            <table width="1024" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td height="30" bgcolor="#ffb6c1" align="center" style="font-size: 20px;">商品信息</td>
                                </tr>
                            </table>
                            <form action="__APP__/Car/caragency" method="post">
                                <table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td bgcolor="#666666">
                                            <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">

                                                <tr>
                                                    <td width="300" height="300" rowspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                        <div align="center">

                                                            <div id="tupian_main">

                                                                <div id="tupian_top">
                                                                    <div class="main" id="lis_1">

                                                                        <ul>
                                                                            <?php if($goodlookInfo["goods_images1"] == null): ?><table width='355' height='355' align='center'><tr><td align='center'><font style='font-size: 20px;color: #9A0000'>暂无图片</font></td></tr></table>
                                                                                <?php else: ?>

                                                                                <li><img src="<?php echo ($goodlookInfo["goods_images1"]); ?>" width="350" height="350"/></li><?php endif; ?>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="normal2" id="lis_2">
                                                                        <ul>
                                                                            <?php if($goodlookInfo["goods_images2"] == null): ?><table width='355' height='355' align='center'><tr><td align='center'><font style='font-size: 20px;color: #9A0000'>暂无图片</font></td></tr></table>
                                                                                <?php else: ?>
                                                                                <li><img src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="350" height="350"/></li><?php endif; ?>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="normal2" id="lis_3">
                                                                        <ul>
                                                                            <?php if($goodlookInfo["goods_images2"] == null): ?><table width='355' height='355' align='center'><tr><td align='center'><font style='font-size: 20px;color: #9A0000'>暂无图片</font></td></tr></table>
                                                                                <?php else: ?>
                                                                                <li><img src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="350" height="350"/></li><?php endif; ?>
                                                                        </ul>
                                                                    </div>


                                                                </div>
                                                                <div>&nbsp;</div>
                                                                <div id="tupian_bottom">
                                                                    <ul>
                                                                        <li class="main" onmouseover="sBoard('tupian_bottom', 'lis', 1);">
                                                                            <img src="<?php echo ($goodlookInfo["goods_images1"]); ?>" width="50" height="50"  /></li>
                                                                        <?php if($goodlookInfo["goods_images2"] == null): ?><?php else: ?>
                                                                            <li class="normal2" onmouseover="sBoard('tupian_bottom', 'lis', 2);"><img
                                                                                    src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="50" height="50"/></li><?php endif; ?>

                                                                        <?php if($goodlookInfo["goods_images2"] == null): ?><?php else: ?>
                                                                            <li class="normal2" onmouseover="sBoard('tupian_bottom', 'lis', 3);"><img
                                                                                    src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="50" height="50"/></li><?php endif; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <style type="text/css">
                                                                a:hover { text-decoration:underline; }
                                                                ul, li { list-style:none; }
                                                                fieldset, img { border:none; }
                                                                #tupian_main { width:400px; margin:10px; margin-left:auto; margin-right:auto;font-size:18px;height: 500px;}
                                                                #tupian_bottom { width:400px; overflow:hidden; border-bottom:10px solid #feb8dc; }
                                                                #tupian_bottom ul { float:left; }
                                                                #tupian_bottom ul li { float:left; border-left:10px solid #faebd7; width:65px; line-height:70px; text-align:center; cursor:pointer;font-size:18px; }
                                                                #tupian_bottom .normal2 { background:#ebf8a4; }
                                                                #tupian_bottom .main{ background:#C2130E; color:#feb8dc; }
                                                                #tupian_top {}
                                                                #tupian_top .normal2 { display:none;}
                                                                #tupian_top .main { display:block; }
                                                                #tupian_top ul { padding:1px 0 0 5px; }
                                                                #tupian_top ul li a { font-size:18px;letter-spacing:1pt;line-height:14pt;background: #faebd7;}
                                                            </style>
                                                            <script type="text/javascript">
                                                                function sBoard(elementID, listName, n) {
                                                                    var elem = document.getElementById(elementID);
                                                                    var elemlist = elem.getElementsByTagName("li");
                                                                    for (var i = 0; i < elemlist.length; i++) {
                                                                        elemlist[i].className = "normal2";
                                                                        var m = i + 1;
                                                                        document.getElementById(listName + "_" + m).className = "normal2";
                                                                    }
                                                                    elemlist[n - 1].className = "main";
                                                                    document.getElementById(listName + "_" + n).className = "main";
                                                                }
                                                            </script>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="80">&nbsp;</td>
                                        <td>
                                            <table width="620">
                                                <tr>
                                                    <td width="120" height="43" bgcolor="#FFFFFF" align="center"><div >商品简介:&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                                                    <td height="43" colspan="4" bgcolor="#FFFFFF" align="left"><div >
                                                            <?php echo ($goodlookInfo["goods_introduction"]); ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" align="left" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_name"]); ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" align="left" bgcolor="#FFFFFF"><div align="center">上架时间：</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_addtime"]); ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" align="left" bgcolor="#FFFFFF"><div align="center">会员价：</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_vipPrice"]); ?>&nbsp;&nbsp;元/斤</div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" bgcolor="#FFFFFF"><div align="center">市场价：</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_marketPrice"]); ?>&nbsp;&nbsp;元/斤</div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" bgcolor="#FFFFFF"><div align="center">产地:</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_place"]); ?></div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" bgcolor="#FFFFFF"><div align="center">剩余数量：</div></td>
                                                    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo ($goodlookInfo["goods_number"]); ?>&nbsp;&nbsp;斤</div></td>
                                                </tr>
                                                <tr>
                                                    <td width="80" height="37" bgcolor="#FFFFFF" align="center">我要订购:</td>
                                                    <td bgcolor="#FFFFFF"><input type="text" class="order_text" value="" style="background-color:#faadad " onMouseOver="this.style.backgroundColor = '#ccb0b0'" onMouseOut="this.style.backgroundColor = '#faadad'" />个</td>
                                                </tr>
                                            </table>

                                            <form>
                                            <table width="620" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="right">
                                                        <input type="hidden" name="car[]"  value="<?php echo ($goodlookInfo["goods_name"]); ?>">

                                                        <input  class="order_btn" type="submit" value="放入购物车"/>
                                                        <!--<a href="#"><img src="__PUBLIC__/images/ljgm.jpg" width="200" height="100" /></a>&nbsp;&nbsp;-->
                                                    </td>
                                                    <!--<td align="left"><a href="#"><img src="__PUBLIC__/images/addgwc.jpg" width="200" height="100" /></a>&nbsp;&nbsp;</td>-->
                                                    <!--<td><input type="hidden" name="car[]"  value="<?php echo ($goodlookInfo["goods_name"]); ?>"><input type="button" value="立即订购"/></td>
                                                    <td><input type="submit" value="放入购物车"/></td>-->
                                                </tr>
                                            </table>
                                            </form>
                                        </td>
                                    </tr>

                                </table>
                            </form>
                            <table width="1024" bgcolor="#faebd7">
                                <tr>
                                    <td height="40" align="left">
                                        <div id="hotnews">
                                            <div id="hotnews_caption">
                                                <ul>
                                                    <li class="current" onmouseover="secBoard('hotnews_caption', 'list', 1);">用户评价</li>
                                                    <li class="normal" onmouseover="secBoard('hotnews_caption', 'list', 2);">商品详情</li>
                                                    <li class="normal" onmouseover="secBoard('hotnews_caption', 'list', 3);">商品评论</li>

                                                </ul>
                                            </div>
                                            <div id="hotnews_content">
                                                <div class="current" id="list_1">
                                                    <ul>
                                                        <li>
                                                        <?php if($_SESSION['user'] != null): ?><form name="form1" method="post" action="__APP__/Index/savecomment?id=<?php echo ($goodlookInfo["id"]); ?>" onSubmit="return chkinput(this)">
                                                                <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div>&nbsp;</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="900" height="40" bgcolor="orange"><div align="center" style="color: #FFFFFF">
                                                                                <div align="center">&nbsp;&nbsp;<span style="color: #006699;font-size: 18px;">发表评论</span></div>
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr height="40">
                                                                        <td>
                                                                            <table width="900">
                                                                                <tr>
                                                                                    <td align="center" width="100"><font style="font-size: 18px;">用户名：</font></td>
                                                                                    <td align="left"><font><?php echo ($_SESSION['user']); ?></font></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr height="50">
                                                                        <td>
                                                                            <table width="900">
                                                                                <tr>
                                                                                    <td width="100" align="center"><font style="font-size: 18px;">评价等级：
                                                                                    </td>
                                                                                    <td>
                                                                                        <input name="dengji" type="radio" value="1"><img src="__PUBLIC__/images/stars1.gif" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <input name="dengji" type="radio" value="2"><img src="__PUBLIC__/images/stars2.gif" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <input name="dengji" type="radio" value="3"><img src="__PUBLIC__/images/stars3.gif" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <input name="dengji" type="radio" value="4"><img src="__PUBLIC__/images/stars4.gif" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <input name="dengji" type="radio" value="5"><img src="__PUBLIC__/images/stars5.gif" />
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="150" bgcolor="#999999">
                                                                            <table width="900" border="1" align="center" cellpadding="1" cellspacing="1">
                                                                                <script language="javascript">
                                                                                    function chkinput(form)
                                                                                    {
                                                                                        if (form.content.value == "")
                                                                                        {
                                                                                            alert("请输入评论内容!");
                                                                                            form.content.select();
                                                                                            return(false);
                                                                                        }
                                                                                        return(true);
                                                                                    }
                                                                                </script>

                                                                                <tr>
                                                                                    <td height="125" bgcolor="#FFFFFF" width="100" align="center"><font style="font-size: 18px;"> 评论内容：</font></td>
                                                                                    <td height="125" bgcolor="#FFFFFF"><div align="left">
                                                                                            <textarea name="content" cols="70" rows="10" class="inputcss" style="background-color:#abe4ff " onMouseOver="this.style.backgroundColor = '#ffffff'" onMouseOut="this.style.backgroundColor = '#e8f4ff'"></textarea>
                                                                                        </div></td>
                                                                                </tr>
                                                                            </table></td>
                                                                    </tr>
                                                                </table>
                                                                <table width="530" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td><div align="center">
                                                                                <input type="submit" value="发&nbsp;表" align="right" style="font-size: 18px;height:40px;width:60px;display:inline-block;" />
                                                                                &nbsp;&nbsp;&nbsp;</div></td>
                                                                    </tr>
                                                                </table>
                                                            </form>
                                                            <?php else: ?>
                                                            <table width="1024" height="80" align="center">
                                                                <tr>
                                                                    <td align="center"><font style="font-size: 20px;">请先登录后，再评论！</font></td>
                                                                </tr>
                                                            </table><?php endif; ?>
                                                        </li>

                                                    </ul>

                                                </div>
                                                <div class="normal" id="list_2">
                                                    <ul>
                                                        <li>
                                                            <table width="800" align="center">

                                                                <?php if($goodlookInfo["goods_images1"] == null && $goodlookInfo["goods_images2"] == null && $goodlookInfo["goods_images2"] == null): ?><tr align='center'><td><font style='font-size: 20px;color: #9A0000'>暂无详情信息</font></td></tr>
                                                                    <?php else: ?>
                                                                    <tr width="800">
                                                                        <td width="800">
                                                                            <font style="font-size: 24px;color: #004C96">商品详细简介：</font>
                                                                            <font style="font-size: 18px;color: black"><?php echo ($goodlookInfo["goods_introduction"]); ?></font>
                                                                        </td>
                                                                    </tr>
                                                                    <if condition='$goodlookInfo.goods_images1 neq null'>

                                                                        <tr align="center">
                                                                            <td align="center">
                                                                                <img src="<?php echo ($goodlookInfo["goods_images1"]); ?>" width="800"
                                                                                     height="500" border="0"><br>
                                                                            </td>
                                                                        </tr><?php endif; ?>
                                                                    <?php if($goodlookInfo["goods_images2"] != null): ?><tr align="center">
                                                                            <td align="center">
                                                                                <img src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="800"
                                                                                     height="500" border="0">
                                                                            </td>
                                                                        </tr><?php endif; ?>
                                                                    <?php if($goodlookInfo["goods_images2"] != null): ?><tr align="center">
                                                                            <td align="center">
                                                                                <img src="<?php echo ($goodlookInfo["goods_images2"]); ?>" width="800"
                                                                                     height="500" border="0">
                                                                            </td>
                                                                        </tr><?php endif; ?>


                                                                    </td>
                                                                    </tr>
                                                                </if>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="normal" id="list_3">
                                                    <ul>
                                                        <li>

                                                            <table width="790" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td height="438" valign="top" bgcolor="#FFFFFF"><div align="center">
                                                                            <table width="1000" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td>&nbsp;</td>
                                                                                </tr>
                                                                                <tr bgcolor="#ffe4c4">
                                                                                    <td height="35" colspan="4"><div align="center" style="color:black;font-size: 18px;">商品评论</div></td>
                                                                                </tr>
                                                                            </table>
                                                                            <?php if($count != null): ?><?php if(is_array($selectcomment)): $i = 0; $__LIST__ = $selectcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): ++$i;$mod = ($i % 2 )?><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">


                                                                                        <tr>
                                                                                            <td width="80" height="30">
                                                                                                <div align="center">商品名称：</div>
                                                                                            </td>
                                                                                            <td width="200">
                                                                                                <div align="left">
                                                                                                    <?php echo ($goodlookInfo["goods_name"]); ?>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td width="90">
                                                                                                <div align="center">评论时间：</div>
                                                                                            </td>
                                                                                            <td width="250">
                                                                                                <div align="left"><?php echo ($sc["time"]); ?></div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="30">
                                                                                                <div align="center">评论者：</div>
                                                                                            </td>
                                                                                            <td height="30">
                                                                                                <div align="left">
                                                                                                    <?php echo ($userList[$i-1]['username']); ?>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                评论等级：
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php switch($sc["dengji"]): ?><?php case "1":  ?><img src='__PUBLIC__/images/stars1.gif' /><?php break;?> 
                                                                                        <?php case "2":  ?><img src='__PUBLIC__/images/stars2.gif' /><?php break;?> 
                                                                                        <?php case "3":  ?><img src='__PUBLIC__/images/stars3.gif' /><?php break;?>
                                                                                        <?php case "4":  ?><img src='__PUBLIC__/images/stars4.gif' /><?php break;?>
                                                                                        <?php case "5":  ?><img src='__PUBLIC__/images/stars5.gif' /><?php break;?>
                                                                                        <?php default: ?>用户未对等级进行评价<?php endswitch;?> 

                                                                                        </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="50"><div align="center">评论内容：</div></td>
                                                                                            <td height="50" colspan="3" valign="bottom"><div align="left"><?php echo ($sc["content"]); ?></div></td>
                                                                                        </tr>
                                                                                        <tr><td height="35" colspan="4">---------------------------------------------------------------------------------------------------------</td></tr>
                                                                                    </table><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                <?php else: ?><table width="1024" height="80" align="center">
                                                                                    <tr>
                                                                                        <td align="center"><font style="font-size: 20px;">暂无用户评论！</font></td>
                                                                                    </tr>
                                                                                </table><?php endif; ?>

                                                                        </div></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td height="80" bgcolor="#fdaee9"><table width="552" height="60" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td width="42" height="60">&nbsp;</td>
        <td width="510" align="center">
            <table width="500" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td>
                <table width="516" border="0" align="center" cellpadding="0" cellspacing="0" align="center">
                <tr>

                <td width="72"><div align="center"><a href="__APP__/Index/gouwuliucheng">购物流程</a></div></td>
                <td width="72"><div align="center"><a href="__APP__/Index/aboutus">关于我们</a></div></td>
                <td width="82"><div align="center"><a href="javascript:location.reload()" target="_self">刷新页面</a> </div></td>
                <td width="72"><div align="center"> <a href="http://www.baidu.com">友情链接</a></div></td>
                </tr>
            </table>
            </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>

    </body>
</html>