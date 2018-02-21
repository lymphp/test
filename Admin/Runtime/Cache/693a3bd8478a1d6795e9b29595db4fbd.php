<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>订单查询结果</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size: 24px;">查询结果</div></td>
            </tr>
            <tr>
                <td height="50" bgcolor="#555555"><table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="120" height="25" bgcolor="#FFFFFF"><div align="center">订单号</div></td>
                            <td width="90" bgcolor="#FFFFFF"><div align="center">下单用户</div></td>
                            <td width="90" bgcolor="#FFFFFF"><div align="center">订货人</div></td>
                            <td width="80" bgcolor="#FFFFFF"><div align="center">金额总计</div></td>
                            <td width="120" bgcolor="#FFFFFF"><div align="center">付款方式</div></td>
                            <td width="120" bgcolor="#FFFFFF"><div align="center">收款方式</div></td>
                            <td width="130" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
                        </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["dingdanhao"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["xiadanren"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["shouhuoren"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["total"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["zfff"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["shff"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ($selectOrder["zt"]); ?></div></td>
                            </tr>
                    </table></td>
            </tr>
            
        </table>
        <br>
        <br>
        <br>
    </body>
</html>