<?php if (!defined('THINK_PATH')) exit();?><html>
    <head><title>用户登录</title>
        <style type="text/css">
            <!--
            .style1 {
                color: #FFCC00;
                font-size: 12px;
            }
            -->
            .a{
                height: 30px;
            }
            #b{
                font-size:36px;
            }
            #c{
                font-size:24px;
            </style>
            <script language="javascript">
                function chkuserinput(form) {
                    if (form.username.value == "") {
                        alert("请输入用户名!");
                        form.username.select();
                        return(false);
                    }
                    if (form.password.value == "") {
                        alert("请输入用户密码!");
                        form.password.select();
                        return(false);
                    }
                    if (form.verify.value == "") {
                        alert("请输入用户验证码!");
                        form.verify.select();
                        return(false);
                    }
                    return(true);
                }
            </script>
        </head>
        <body bgcolor="#faebd7">
        <table width="1024" height="40" align="center">
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
        <table width="1024" height="680"  border="0" align="center" cellpadding="0" cellspacing="0" background="__PUBLIC__/images/bg3.jpg">
            <tr>
                <td width="500"><table width="337" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr align="center">
                            <td width="600" height="20" align="center"><div align="center" style="color: #FFFFFF"><font id="b" color="black" face="宋体"><strong>用户登录</strong></font> </div></td>
                            </tr>
                            <tr align="center">
                                <td height="100" align="center"><table width="600" height="199" border="0" align="center" cellpadding="0" cellspacing="1">
                                        <tr>
                                            <td height="197"><table width="600" height="184" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="600" height="184"><table width="300" border="0" cellpadding="0" cellspacing="0" align="center">

                                                                <form name="form2" method="post" action="__APP__/Index/loginverify" onSubmit="return chkuserinput(this)">

                                                                    <tr>
                                                                        <td width="100" height="40"><div align="right"><font face="宋体" id="c"><strong>用户：</strong></strong></font>
                                                                            </div></td>
                                                                        <td height="40" colspan="2"><div align="left">
                                                                                <input height="30" type="text" name="username" size="19" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor = '#ffffff'" onMouseOut="this.style.backgroundColor = '#5dafd1'">
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="40" id="c"><div align="right"><font face="宋体" id="c"><strong>密码：</strong></font> </div></td>
                                                                        <td colspan="2"><div align="left">
                                                                                <input height="30" type="password" name="password" size="19" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor = '#ffffff'" onMouseOut="this.style.backgroundColor = '#5dafd1'">
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="40" id="c"><div align="right"> <font face="宋体" id="c"><strong>验证：</strong></font> </div></td>
                                                                        <td width="85" height="30"><div align="left">
                                                                                <input height="30" type="text" name="verify" size="10" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor = '#ffffff'" onMouseOut="this.style.backgroundColor = '#5dafd1'">
                                                                            </div></td>
                                                                        <td width="108"><div align="left">
                                                                                <img src="__APP__/Index/verify/" /> 
                                                                                <!--<a href="#" onclick="__APP__/Index/verify/">看不清</a>-->

                                                                            </div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="20" colspan="3">
                                                                            <div align="center">

                                                                                <input name="submit" type="submit" style="width: 80px;height: 25px;color: #002DFF;background-color: #979797" value="确认" />
                                                                                &nbsp;
                                                                                <a href="tongyizc.php">
                                                                                    <input name="button" type="button" value="注册" style="width: 80px;height: 25px;color: #002DFF;background-color: #979797">
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10" colspan="3">&nbsp;</td>
                                                                    </tr>
                                                                </form>
                                                            </table></td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
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
;

        </body>
    </html>