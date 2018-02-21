<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>用户留言管理</title>
        <link  rel="stylesheet" type="text/css" href="css/font.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body topmargin="0" leftmargin="0" bottommargin="0">

        <table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr bgcolor="gainsboro">
                <td height="40" colspan="4"><div align="center"><font style="font-size: 24px">用户留言管理</font></div></td>
            </tr>
            <tr>
                <td width="380">
                        <table width="380" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr align="center"><td bgcolor="#ddFFFF" height="35">留言内容</td></tr>
                            <?php if(is_array($leavewordInfo)): $i = 0; $__LIST__ = $leavewordInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lwi): ++$i;$mod = ($i % 2 )?><tr align="center"><td bgcolor="#ddFFFF" height="35"><?php echo ($lwi["content"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                </td>
                <td width="120">
                        <table width="120" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr align="center"><td bgcolor="#ddFFFF" height="35">留言者</td></tr>
                            <?php if(is_array($leavewordUser)): $i = 0; $__LIST__ = $leavewordUser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lwu): ++$i;$mod = ($i % 2 )?><tr align="center"><td bgcolor="#ddFFFF" height="35"><?php echo ($lwu["username"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>

                </td>
                <td width="180">
                        <table width="180" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr align="center"><td bgcolor="#ddFFFF" height="35">留言时间</td></tr>
                            <?php if(is_array($leavewordInfo)): $i = 0; $__LIST__ = $leavewordInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lwi): ++$i;$mod = ($i % 2 )?><tr align="center"><td bgcolor="#ddFFFF" height="35"><?php echo ($lwi["time"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>

                </td>
                <td width="120">
                        <table width="120" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr align="center"><td bgcolor="#ddFFFF" height="35">操作</td></tr>
                            <?php if(is_array($leavewordInfo)): $i = 0; $__LIST__ = $leavewordInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lwi): ++$i;$mod = ($i % 2 )?><tr align="center"><td bgcolor="#ddFFFF" height="35"><a href="__URL__/deleteLeaveWord?id=<?php echo ($lwi["id"]); ?>">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                </td>

            </tr>
            <tr>
            
            <p>&nbsp;</p>
            </tr>
    </table>
        <p>&nbsp;<?php echo ($page); ?></p>
</body>
</html>