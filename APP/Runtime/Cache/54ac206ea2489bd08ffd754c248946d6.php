<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>
    </title>
</head>

<script language="javascript">
</script>
<script language="javascript">
  function chkinput(form)
  {
    if(form.username.value=="")
	{
	 alert("请输入昵称!");
	 form.username.select();
	 return(false);
	}
	if(form.password.value=="")
	{
	 alert("请输入注册密码!");
	 form.password.select();
	 return(false);
	}
    if(form.password1.value=="")
	{
	 alert("请输入确认密码!");
	 form.password1.select();
	 return(false);
	 }	
	if(form.password.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.password.select();
	 return(false);
	 }	
	if(form.password.value!=form.password1.value)
	 {
	 alert("密码与重复密码不同!");
	 form.password.select();
	 return(false);
	 }
   if(form.email.value=="")
	{
	 alert("请输入电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("请输入正确的电子邮箱地址!!");
	 form.email.select();
	 return(false);
	 }
   if(form.tel.value=="")
	{
	 alert("请输入联系电话!");
	 form.tel.select();
	 return(false);
	 }
  if(form.truename.value=="")
	{
	 alert("请输入真实姓名!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("请输入身份证号!");
	 form.sfzh.select();
	 return(false);
	 }
  if(form.dizhi.value=="")
	{
	 alert("请输入家庭住址!");
	 form.dizhi.select();
	 return(false);
	 }
  if(form.tsda.value=="")
	{
	 alert("请输密码提示答案!");
	 form.tsda.select();
	 return(false);
	 }
   if((form.ts1.value==1)&&(form.ts2.value==""))	
     {
	 alert("请选择或输入密码提示答案!");
	 form.ts2.select();
	 return(false);
	 }
   return(true);
  }
</script>

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
<table width="1024" height="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1024" height="600" align="center" valign="top" background="images/zc.jpg">
      <table  height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div>&nbsp;</div>
            </td>
        </tr>
          <tr>
              <td>
                  <div>&nbsp;</div>
              </td>
          </tr>
          <tr>
          <td width="500"><table width="500" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="25" bgcolor="#1e90ff"><div align="center" style="color: black;font-size: 20px;">用户注册</div></td>
            </tr>
            <tr>
              <td  bgcolor="#555555"><table width="500" border="1" align="center">
                  <form name="form1" method="post" action="__APP__/Index/savereg" onSubmit="return chkinput(this)">
                    <tr>
                      <td width="100" height="30" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
                      <td width="397" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="username" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1' />
                              <span id="ts">请输入你的用户名</span>
                              
                      </div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">注册密码：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="password" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">确认密码：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="password1" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="email" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">QQ号码：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="qq" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="youbian" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="tel" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">(手机号)*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">真实姓名：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="truename" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span> </div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="sfzh" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="dizhi" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                      <tr>
                          <td height="30" bgcolor="#FFFFFF"><div align="center">验证码：</div></td>
                          <td height="30" bgcolor="#FFFFFF">
                              <input type="text" name="yzm" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'" />
                              <img src="__APP__/Index/verify/" /> 
                              

                              <span style="color: #FF0000">*</span>
                          </td>
                      </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">密码提示：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <select name="tishi1" class="inputcss">
                            <option selected value=1>请选择问题</option>
                            <option value="生日">生日</option>
                            <option value="爱好">爱好</option>
                          </select>
&nbsp;&nbsp;其他:&nbsp;&nbsp;
                <input type="text" name="tishi2" class="inputcss" size="15" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">提示答案：</div></td>
                      <td height="30" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="huida" size="25" class="inputcss" style="background-color:#5dafd1 " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#5dafd1'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="30" colspan="2" bgcolor="#FFFFFF" align="center">
                          <input name="submit2" type="submit" style="width: 40px;height: 25px;background-color: #93bee2;" value="提交">
&nbsp;&nbsp;
                <input name="reset" type="reset" style="width: 40px;height: 25px;background-color: #93bee2;" value="重填">
                      </td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table>
            <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="500"><div align="center" style="color: #FF0000">注意：带*为必添内容!</div></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div></td>
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


</body>
</html>