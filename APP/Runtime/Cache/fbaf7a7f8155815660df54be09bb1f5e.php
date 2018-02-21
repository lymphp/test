<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>平武特产网站</title>
        <link href="__ROOT__/Public/css/cssreset.css" rel="stylesheet" type="text/css">
        <link href="__ROOT__/Public/css/main.css" rel="stylesheet" type="text/css">
        <link href="__ROOT__/Public/css/font.css" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/cssreset.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font.css" />-->
        <style type="text/css">
            a.topcs:link{
                color: black;
                font-size:14px;
                text-decoration:none;
            }
            a.topcs:hover{
                font-size:17px;
                color: #AA1111;
                text-decoration:none;}
            a.topcs:visited{
                font-size:14px;
                color: black;
                text-decoration:none;}
            a.topcs:active{
                color: #CC0000;
                font-size:14px;
                text-decoration:none;}
            .topcs{
                list-style-type: square;
            }
            nav{
                position:absolute;
                left:50px;
                top:100px;
                border:1px solid #b61d1d;
            }
        </style>
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
    <?php else: ?> <table width="1024" height="40" align="center">
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
    <nav>
        <div class="all">
            <font color="white">
            全部商品分类</font>
        </div>


        <ul>

            <div align="left"> &nbsp;
            </div>
            <li class="nav_item"><a href="#">健康饮品</a><span class="jt">&gt;</span>
                <div class="sub_menu">
                    <div class="leftmenu">
                        <dl>
                            <dt>
                            <?php if(is_array($selectsmalltype1)): $i = 0; $__LIST__ = $selectsmalltype1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst1): ++$i;$mod = ($i % 2 )?><dd><a href='#'>&nbsp;</a></dd>
                                <dd><a href='__APP__/Index/looktype?id=<?php echo ($sst1["id"]); ?>'><?php echo ($sst1['smalltype_name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
            </li>
            <div align="left"> &nbsp;
            </div>
            <li class="nav_item"><a href="#">肉类制品</a><span class="jt">&gt;</span>
                <div class="sub_menu">
                    <div class="leftmenu">
                        <dl>
                            <dt>
                            <?php if(is_array($selectsmalltype2)): $i = 0; $__LIST__ = $selectsmalltype2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst2): ++$i;$mod = ($i % 2 )?><dd><a href='#'>&nbsp;</a></dd>
                                <dd><a href='__APP__/Index/looktype?id=<?php echo ($sst2["id"]); ?>'><?php echo ($sst2['smalltype_name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
            </li>
            <div align="left"> &nbsp;
            </div>
            <li class="nav_item"><a href="#">果蔬制品</a><span class="jt">&gt;</span>
                <div class="sub_menu">
                    <div class="leftmenu">
                        <dl>
                            <dt>
                            <?php if(is_array($selectsmalltype3)): $i = 0; $__LIST__ = $selectsmalltype3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst3): ++$i;$mod = ($i % 2 )?><dd><a href='#'>&nbsp;</a></dd>
                                <dd><a href='__APP__/Index/looktype?id=<?php echo ($sst3["id"]); ?>'><?php echo ($sst3['smalltype_name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
            </li>
            <div align="left"> &nbsp;
            </div>
            <li class="nav_item"><a href="#">野菌干果</a><span class="jt">&gt;</span>
                <div class="sub_menu">
                    <div class="leftmenu">
                        <dl>
                            <dt>
                            <?php if(is_array($selectsmalltype4)): $i = 0; $__LIST__ = $selectsmalltype4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst4): ++$i;$mod = ($i % 2 )?><dd><a href='#'>&nbsp;</a></dd>
                                <dd><a href='__APP__/Index/looktype?id=<?php echo ($sst4["id"]); ?>'><?php echo ($sst4['smalltype_name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
            </li>
            <div align="left"> &nbsp;
            </div>
            <li class="nav_item"><a href="#">特色小吃</a><span class="jt">&gt;</span>
                <div class="sub_menu">
                    <div class="leftmenu">
                        <dl>
                            <dt>
                            <?php if(is_array($selectsmalltype5)): $i = 0; $__LIST__ = $selectsmalltype5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst5): ++$i;$mod = ($i % 2 )?><dd><a href='#'>&nbsp;</a></dd>
                                <dd><a href='__APP__/Index/looktype?id=<?php echo ($sst5["id"]); ?>'><?php echo ($sst5['smalltype_name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dt>
                        </dl>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <table width="1024" align="center">
        <tr height="450">
            <td width="230">
            </td>
            <td>
                <a href="__APP__/Index/showrecomend"> <img src="__PUBLIC__/images/tiaozhuan.gif" width="600" height="450"/></a>
            </td>
            <td width="180">
                <table width="180" height="450" align="center">
                    <tr height="25" background='#fccece'>
                        <td align="left"><font color="#b22222" style="font-size: 18px;">&nbsp;&nbsp;●&nbsp;&nbsp;公告</font>
                            <table width="80" align="right" height="20">
                                <tr>
                                    <td width="75" align="right"><a href="__APP__/Index/gengduo">更多>>></a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height='10'><td>----------------------------------</td></tr>
                    <tr height="275"><td>
                    <marquee direction="down" onmouseover="stop()" onmouseout="start()" scrollamount="3">
                        <div style="height: 275px;">
                            <ul>
                                <?php if(is_array($selectnotice)): $i = 0; $__LIST__ = $selectnotice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sn): ++$i;$mod = ($i % 2 )?><li>
                                    &nbsp;<br>
                                    <a class="topcs" href="__APP__/Index/gonggaoxiangqin?id=<?php echo ($sn["id"]); ?>" target="_blank">●<?php echo ($sn["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </marquee>
            </td></tr>
        <tr height="60"><td><img src="__PUBLIC__/images/2.gif" /> </td></tr>
    </table>
</td>
</tr>
</table>
<table align="center" width="1024">
    <tr background="__PUBLIC__/images/tuijian.jpg" style="width: 1024px;height: 40px;"><td align="right"><a href="__APP__/Index/showrecomend"><font style="font-size: 20px;color: #9c47c4;">更多>>></font></a></td></tr>
</table>
<table align="center" width="1024" height="400">

    <tr align="center">

        <td width="250" align="center">

            <table align="center" border="3" class="table">

                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230" align="center">
                        <table width="200" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[0]['id']); ?>">
                                            <img src="<?php echo ($selectgoodsre[0]['goods_images1']); ?>"  title="世界著名的四大干果" width="200" height="200" border="0">
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        </table>




                    </td>
                </tr>
                <tr>
                    <td width="100" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[0]['id']); ?>"><font color="#808080"><?php echo ($selectgoodsre[0]['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsre[0]['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[0]['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>

        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230" align="center">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[1]['id']); ?>">
                                            <img src="<?php echo ($selectgoodsre[1]['goods_images1']); ?>" title="以肉源绿色、制作工艺历史悠久、肉味鲜美、可长时间存放等特点深受中外游客青睐" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>



                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[1]['id']); ?>"><font color="#808080"><?php echo ($selectgoodsre[1]['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsre[1]['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[1]['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>

        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230" align="center">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[2]['id']); ?>">
                                            <img src="<?php echo ($selectgoodsre[2]['goods_images1']); ?>" title="绵阳野生猕猴桃，口感酸甜" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>


                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[2]['id']); ?>"><font color="#808080"><?php echo ($selectgoodsre[2]['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsre[2]['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[2]['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>

        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230" align="center">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[3]['id']); ?>">
                                            <img src="<?php echo ($selectgoodsre[3]['goods_images1']); ?>" title="绵阳纯天然蜂蜜，还有补中，润燥，止痛，解毒功效" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>



                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【价格】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[3]['id']); ?>"><font color="#808080"><?php echo ($selectgoodsre[3]['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsre[3]['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsre[3]['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table align="center" width="1024">
    <tr background="__PUBLIC__/images/zuixin.jpg" style="width: 1024px;height: 40px;"><td align="right"><a href="__APP__/Index/showrecomend"><font style="font-size: 20px;color: #9c47c4;">更多>>></font></a></td></tr>
</table>
<table align="center" width="1024" height="400">

    <tr align="center">
        <td width="250" align="center">
            <table align="center" border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['0']['id']); ?>">
                                            <img src="<?php echo ($selectgoodsadd['0']['goods_images1']); ?>"  title="世界著名的四大干果" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['0']['id']); ?>"><font color="#808080"><?php echo ($selectgoodsadd['0']['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsadd['0']['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['0']['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>
        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['1']['id']); ?>">
                                            <img src="<?php echo ($selectgoodsadd['1']['goods_images1']); ?>" title="以肉源绿色、制作工艺历史悠久、肉味鲜美、可长时间存放等特点深受中外游客青睐" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>



                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['1']['id']); ?>"><font color="#808080"><?php echo ($selectgoodsadd['1']['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsadd['1']['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['1']['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>
        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['2']['id']); ?>">
                                            <img src="<?php echo ($selectgoodsadd['2']['goods_images1']); ?>" title="绵阳野生猕猴桃，口感酸甜" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['2']['id']); ?>"><font color="#808080"><?php echo ($selectgoodsadd['2']['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsadd['2']['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['2']['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>
        <td width="250" align="center">
            <table border="3" class="table">
                <tr height="20">
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td width="230">

                        <table width="200"  border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td width="200" rowspan="6">
                                    <div align="center">

                                        <a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['3']['id']); ?>">
                                            <img src="<?php echo ($selectgoodsadd['3']['goods_images1']); ?>" title="绵阳纯天然蜂蜜，还有补中，润燥，止痛，解毒功效" width="200" height="200" border="0">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>




                    </td>
                </tr>
                <tr>
                    <td width="124" height="32">&nbsp;&nbsp;&nbsp;&nbsp;【名称】：<a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['3']['id']); ?>"><font color="#808080"><?php echo ($selectgoodsadd['3']['goods_name']); ?></font></a></td>
                    <td height="16">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;&nbsp;&nbsp;&nbsp;【市场价】：<font color="red"><?php echo ($selectgoodsadd['3']['goods_marketPrice']); ?></font> 元/斤</td>
                </tr>
                <tr>
                    <td height="32"><a href="__APP__/Index/lookInfo?id=<?php echo ($selectgoodsadd['3']['id']); ?>"><font color="blue" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;【加入购物车】</font></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>


<table width="1024" align="center">
    <tr>
        <td>
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

</td>
</tr>
</table>

</body>
</html>