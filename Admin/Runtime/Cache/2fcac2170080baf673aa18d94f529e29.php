<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>小分类列表</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>&nbsp;</p>
        <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">

                        <tr bgcolor="#7fffd4">
                            <td height="40" colspan="10" style="font-size: 24px;"><div align="center">商品类别管理</div></td>
                        </tr>
                        <tr>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">分类名称</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">操作</div></td>

                        </tr>
                        <?php if(is_array($dst)): $i = 0; $__LIST__ = $dst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$st): ++$i;$mod = ($i % 2 )?><tr height="25" bgcolor="#FFFFFF"align='center'>
                                <td><?php echo ($st["smalltype_name"]); ?></td>
                                <td><a href="__URL__/deleteSmallTypeSuccess?id=<?php echo ($st["id"]); ?>">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </table></td>
            </tr>
        </table>
        <p>&nbsp;<?php echo ($page); ?></p>
        <p>&nbsp;</p>
    </body>
</html>