<?php if (!defined('THINK_PATH')) exit();?><?php include("check_login.php"); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>用户管理</title>
        <link rel="stylesheet" type="text/css" href="css/font.css">
        <style type="text/css">
            <!--
            .style1 {color: #FFFFFF}
            -->
        </style>
    </head>

    <body topmargin="0" leftmargin="0" bottommargin="0">

        <form name="form1" method="post" action="__URL__/deleteUser">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>
                    <td height="40" bgcolor="#999999"><div align="center" style="font-size: 24px;">用户管理</div></td>
                </tr>
                <tr>
                    <td  bgcolor="#666666"><table width="600" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr>
                                <td width="224" height="30" bgcolor="#99FFFF"><div align="center">用户昵称</div></td>
                                <td width="79" bgcolor="#99FFFF"><div align="center">删除</div></td>
                                <td width="75" bgcolor="#99FFFF"><div align="center">查看信息</div></td>

                            </tr>
                            <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$uList): ++$i;$mod = ($i % 2 )?><tr>
                                <td height="30" bgcolor="#99FFFF"><div align="center"><?php echo ($uList["username"]); ?></div></td>
                                <td height="30" bgcolor="#99FFFF"><div align="center">
                                        <input type="checkbox" name="<?php echo ($uList["id"]); ?>" value="<?php echo ($uList["id"]); ?>" /></div></td>
                                <td height="30" bgcolor="#99FFFF"><div align="center"><a href="__URL__/userInfo?id=<?php echo ($uList["id"]); ?>">查看</a></div></td>

                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="92"><div align="right"><input type="submit" value="删除选项" /></div>
                    </td>
                </tr>
            </table>
            <p>&nbsp;<?php echo ($page); ?></p>
            <p>&nbsp;</p>


        </form>
    </body>
</html>