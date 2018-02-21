<?php if (!defined('THINK_PATH')) exit();?><?php include("check_login.php"); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>用户信息管理</title>
  <link rel="stylesheet" type="text/css" href="css/font.css" />
  <style type="text/css">
    <!--
    .style1 {color: #FFFFFF}
    -->
  </style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="djyh.php">
    <tr>
      <td height="30" bgcolor="#999999"><div align="center" class="style1">用户信息查看</div></td>
    </tr>
    <tr>
      <td height="98" bgcolor="#666666"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
          <!--DWLayoutTable-->
          <tr>
            <td width="99" height="30" bgcolor="#99FFFF"><div align="center">用户昵称：</div></td>
            <td width="180" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["username"]); ?></div></td>

          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">真实姓名：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["truename"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">身份证号：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["sfzh"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">E-mail：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["email"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">联系电话：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["tel"]); ?></div></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#99FFFF"><div align="center">QQ号码：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["qq"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">注册时间：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["regtime"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">密码提示：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["tishi"]); ?></div></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#99FFFF"><div align="center">密码提示答案：</div></td>
            <td colspan="3" bgcolor="#99FFFF"><div align="left"><?php echo ($userInfo["huida"]); ?></div></td>
          </tr>
        </table></td>
    </tr>
  </form>
</table>
</body>
</html>