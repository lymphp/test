<?php if (!defined('THINK_PATH')) exit();?><?php include("check_login.php"); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>编辑公告</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
    <script language="javascript">
    function chkinput(form)
    {
        if(form.title.value=="")
        {
            alert("请输入公告主题!");
            form.title.select();
            return(false);
        }
        if(form.content.value=="")
        {
            alert("请输入公告内容!");
            form.content.select();
            return(false);
        }
        return(true);
    }
</script>
</head>


<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellspacing="0">
    <tr>
        <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size: 24px;">查看修改公告</div></td>
    </tr>
    <tr>
        <td bgcolor="#666666"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
                <form name="form1" method="post" action="__URL__/updateNotice" onSubmit="return chkinput(this)">

                    <tr>
                        <td width="100" height="35" bgcolor="#FFFFFF"><div align="center">公告主题</div></td>
                        <td width="647" height="35" bgcolor="#FFFFFF"><div align="left"><input type="text" name="title" size="50" class="inputcss" value="<?php echo ($selectNotice["title"]); ?>"></div></td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF"><div align="center">公告内容：</div></td>
                        <td bgcolor="#FFFFFF"><div align="left"><textarea name="content" cols="60" rows="8" class="inputcss"><?php echo ($selectNotice["content"]); ?></textarea>
                            </div></td>
                    </tr>
                    <tr>
                        <td height="35" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="hidden" name="id" value="<?php echo ($selectNotice["id"]); ?>" /><input type="submit" value="更改" class="buttoncss" />&nbsp;&nbsp;<input type="reset" value="取消更改" class="buttoncss" /></div></td>
                    </tr>
                </form>
            </table></td>
    </tr>
</table>
</body>
</html>