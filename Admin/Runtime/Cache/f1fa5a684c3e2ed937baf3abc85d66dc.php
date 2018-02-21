<?php if (!defined('THINK_PATH')) exit();?><?php //include("check_login.php"); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>更改用户</title>
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

                        <tr>
                            <td width="99" height="35" bgcolor="#99FFFF"><div align="center">原管理员名：</div></td>
                            <td width="152" height="35" bgcolor="#99FFFF"><div align="left"><input type="text" name="n0" class="inputcss" size="20" /></div></td>
                        </tr>
                        <tr>
                            <td width="96" height="35" bgcolor="#99FFFF"><div align="center">新管理员名：</div></td>
                            <td width="139" height="35" bgcolor="#99FFFF"><div align="left"><input type="text" name="adminname" class="inputcss" size="20" /></div></td>
                        </tr>
                        <tr>
                            <td width="127" height="35" bgcolor="#99FFFF"><div align="center">确认新管理员名：</div></td>
                            <td width="130" bgcolor="#99FFFF"><div align="left"><input type="text" name="n2" class="inputcss" size="20"></div></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20"><div align="center" class="style1">
                        <!--<input type="hidden" name="id" value="<?php echo ($selectNotice["id"]); ?>" />-->
                        <input type="submit" value="更改" class="buttoncss" />&nbsp;<input type="reset" value="取消更改" class="buttoncss"></div></td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>