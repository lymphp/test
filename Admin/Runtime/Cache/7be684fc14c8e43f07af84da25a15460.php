<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>更改管理员信息</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
    <script language="javascript">

    function chkinput(form)
    {
        if(form.n0.value=="")
        {
            alert("请输入原管理员名!");
            form.n0.select();
            return(false);

        }
        if(form.adminname.value!="")
        {
            if(form.adminname.value==""||form.n2.value=="")
            {
                alert("请输入新管理员名或确认新管理员名!");
                form.adminname.select();
                return(false);
            }
            if(form.adminname.value!=form.n2.value)
            {
                alert("新管理员名与确认新管理员名不同!");
                form.adminname.select();
                return(false);

            }
        }
        if(form.p0.value=="")
        {
            alert("请输入原管理员密码!");
            form.p0.select();
            return(false);

        }

        if(form.p1.value!="")
        {
            if(form.p1.value==""||form.p2.value=="")
            {
                alert("请输入管理员新密码或确认密码!");
                form.p1.select();
                return(false);
            }
            if(form.p1.value!=form.p2.value)
            {
                alert("管理员新密码与确认管理员密码不同!");
                form.p1.select();
                return(false);

            }
        }


        if(form.p1.value!="")
        {
            if(form.p1.value.length<6)
            {
                alert("新密码应大于6位!");
                form.p1.select();
                return(false);
            }

        }
        return(true);
    }
</script>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<div align="center">
    <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="__URL__/editName" onSubmit="return chkinput(this)">
            <tr>
                <td height="40" bgcolor="#999999"><div align="center" style="font-size: 24px;">更改管理员信息</div></td>
            </tr>
            <tr>
                <td bgcolor="#666666"><table width="780" border="0" align="center" cellpadding="0" cellspacing="1">

                        <tr height="35">
                            <td width="20" height="35" bgcolor="#99FFFF"><div align="center">原管理员名：</div></td>
                            <td width="400" height="35" bgcolor="#99FFFF"><div align="left"><input type="text" name="n0" class="inputcss" size="20" /></div></td>
                        </tr>
                        <tr height="35">
                            <td height="20" bgcolor="#99FFFF"><div align="center">原管理员密码：</div></td>
                            <td bgcolor="#99FFFF"><div align="left"><input type="password" name="p0" class="inputcss" size="20"></div></td>
                            </tr>
                        <tr height="35">
                            <td width="20" height="35" bgcolor="#99FFFF"><div align="center">新管理员名：</div></td>
                            <td width="139" height="35" bgcolor="#99FFFF"><div align="left"><input type="text" name="adminname" class="inputcss" size="20" /></div></td>
                        </tr>
                        <tr height="35">
                            <td height="20" bgcolor="#99FFFF"><div align="center">新管理员密码：</div></td>
                            <td bgcolor="#99FFFF"><div align="left"><input type="password" name="p1" class="inputcss" size="20"></div></td>
                        </tr>
                        <tr height="35">
                            <td width="20" height="35" bgcolor="#99FFFF"><div align="center">确认新管理员名：</div></td>
                            <td width="130" bgcolor="#99FFFF"><div align="left"><input type="text" name="n2" class="inputcss" size="20"></div></td>
                        </tr>
                        <tr height="35">
                            <td height="20" bgcolor="#99FFFF"><div align="center">确认新管理员密码：</div></td>
                            <td bgcolor="#99FFFF"><div align="left"><input type="password" name="p2" class="inputcss" size="20"></div></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20"><div align="center" class="style1">
                        <input type="submit" value="更改" class="buttoncss" />&nbsp;<input type="reset" value="取消更改" class="buttoncss"></div></td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>