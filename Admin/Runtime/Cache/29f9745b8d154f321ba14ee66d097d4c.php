<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>评论编辑</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
    <table width="750" border="0" align="center" cellpadding="0" cellspacing="1">

        
            <tr bgcolor="#7fffd4">
                <td height="40" colspan="5"><div align="center" style="font-size: 24px;">用户评论编辑</div></td>
            </tr>
            <tr>
                <td>
                    <table width="345" height="45" border="0" align="center" cellpadding="0" cellspacing="1">

                        <tr>
                            <td width="345" height="35" bgcolor="#FFFFFF"><div align="center">评论内容</div></td></tr>
                        <?php if(is_array($selectcomment)): $i = 0; $__LIST__ = $selectcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): ++$i;$mod = ($i % 2 )?><tr>
                                <td width="345" height="35" bgcolor="#FFFFFF"><div align="center"><?php echo ($sc["content"]); ?></div></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </td>
                <td>
                    <table width="110" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="110" height="35" bgcolor="#FFFFFF"><div align="center">评论时间</div></td></tr>
                        <?php if(is_array($selectcomment)): $i = 0; $__LIST__ = $selectcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): ++$i;$mod = ($i % 2 )?><tr>
                                <td width="110" height="35" bgcolor="#FFFFFF"><div align="center"><?php echo ($sc["time"]); ?></div></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </td>
                <td>
                    <table width="93" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="93" height="35" bgcolor="#FFFFFF"><div align="center">商品名称</div></td></tr>
                        <?php if(is_array($selectgoodsname)): $i = 0; $__LIST__ = $selectgoodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sgn): ++$i;$mod = ($i % 2 )?><tr>
                                <td width="93" height="35" bgcolor="#FFFFFF"><div align="center"><?php echo ($sgn["goods_name"]); ?></div></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </td>
                <td>
                    <table width="100" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="100" height="35" bgcolor="#FFFFFF"><div align="center">评论者</div></td></tr>
                        <?php if(is_array($selectusername)): $i = 0; $__LIST__ = $selectusername;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sun): ++$i;$mod = ($i % 2 )?><tr>
                                <td width="100" height="35" bgcolor="#FFFFFF"><div align="center"><?php echo ($sun["username"]); ?></div></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </td>
                <td>
                    <table width="93" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="93" height="35" bgcolor="#FFFFFF"><div align="center">操作</div></td></tr>
                        <?php if(is_array($selectcomment)): $i = 0; $__LIST__ = $selectcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): ++$i;$mod = ($i % 2 )?><tr>
                                <td width="93" height="35" bgcolor="#FFFFFF"><div align="center"><a href="__URL__/deleteComment?id=<?php echo ($sc["id"]); ?>">删除</a></div></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </td>
            </tr>
                    
            
            <tr>
                <p>&nbsp;</p>
                <br>
                <br>
                <br>
                <br>
                <br>
            </tr>
    </table>
</body>
</html>