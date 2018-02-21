<?php if (!defined('THINK_PATH')) exit();?><?php include("check_login.php"); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>公告管理</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
    <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size: 24px;">公告管理</div></td>
        </tr>
        <tr>
            <td height="50" bgcolor="#666666"><table width="750" height="35" border="0" align="center" cellpadding="0" cellspacing="1">

                    <tr>
                        <td width="600" bgcolor="#FFFFFF"><div align="center">公告主题</div></td>
                        <td width="150" bgcolor="#FFFFFF"><div align="center">操作</div></td>
                    </tr>
                    <?php if(is_array($noticeGuanLi)): $i = 0; $__LIST__ = $noticeGuanLi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ngl): ++$i;$mod = ($i % 2 )?><tr>
                            <td height="35" bgcolor="#FFFFFF"><div align="center"><?php echo ($ngl["title"]); ?></div></td>
                            <td height="35" bgcolor="#FFFFFF"><div align="center"><a href="__URL__/selectNotice?id=<?php echo ($ngl["id"]); ?>">查看编辑</a>&nbsp;&nbsp;&nbsp;<a href="__URL__/deleteNotice?id=<?php echo ($ngl["id"]); ?>">删除</a></div></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table></td>
        </tr>
    </table>
    <p>&nbsp;<?php echo ($page); ?></p>
    <p>&nbsp;</p>
</body>
</html>