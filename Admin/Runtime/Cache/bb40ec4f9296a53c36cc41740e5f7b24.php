<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>无标题文档</title>
        <script language="javascript">
            function checkForm() {
                if (form1.adminname.value == "") {
                    alert("请输入用户名！");
                    form1.adminname.focus();
                    return false;
                }
                if (form1.password.value == "") {
                    alert("请输入密码");
                    form1.username.focus();
                    return false;
                }
                if (form1.password.value.length < 6) {
                    alert("密码至少为6位，请重新输入密码！");
                    form1.password.focus();
                    return false;
                }
            }
        </script>
    </head>

    <body>
        <form id="form1" name="form1" method="post" action="__URL__/checkAdmin" onsubmit="return checkForm()" height="600px">
            <table width="1035" height=200" background="__ROOT__/Public/images/4.jpg" align="center">
                <tr>
                    <td width="379" height="186" algign="right">
                        <tr><td>
                                <th width="399" height="185" scope="row" border="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="__ROOT__/Public/images/login1.jpg" width="399" height="150" border="0" /></th><td width="241"></td>
                        </tr>
                        <tr> 
                            <td width="300">
                                <th width="300" height="150" align="left" bgcolor="#349199" scope="row">
                                    <table>
                                        <h2>&nbsp;&nbsp;&nbsp;&nbsp; 用户名：   
                                            <input type="text" name="adminname" id="a" /><br />
                                            &nbsp;&nbsp;&nbsp;&nbsp; 密&nbsp;码：
                                            <input type="password" name="password" id="a" />
                                        </h2>
                                        <h2>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="b" value="登录" />
                                        </h2>
                                        <p>&nbsp;</p></th>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;</p></td>
                        </tr>
                        <tr>
                            <td height="136"><p>&nbsp;</p></td>
                        </tr>

                        </table>
                        </form>
                        </body>
                        </html>