<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查看订单</title>
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
            <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size: 24px;">查看订单 </div></td>
        </tr>
        <tr>
            <td height="40" bgcolor="#666666"><table width="750" height="44" border="0" align="center" cellpadding="0" cellspacing="1">

                    <tr>

                        <td width="121" height="20" bgcolor="#FFFFFF"><div align="center">订单号</div></td>
                        <td width="59" bgcolor="#FFFFFF"><div align="center">下单人</div></td>
                        <td width="60" bgcolor="#FFFFFF"><div align="center">订货人</div></td>
                        <td width="70" bgcolor="#FFFFFF"><div align="center">金额总计</div></td>
                        <td width="88" bgcolor="#FFFFFF"><div align="center">付款方式</div></td>
                        <td width="87" bgcolor="#FFFFFF"><div align="center">收货方式</div></td>
                        <td width="120" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
                        <td width="150" bgcolor="#FFFFFF"><div align="center">操作</div></td>

                    </tr>
                    
                        <tr>

                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[dingdanhao];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[xiadanren];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[shouhuoren];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[total];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[zfff];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[shff];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center"><?php echo @$info1[zt];?></td>
                            <td height="21" bgcolor="#FFFFFF" align="center">
                                    <input name="button" type="button" class="buttoncss" id="button" onClick="javascript:window.open('chakdingdan.php?id=<?php echo @$info1[id];?>','newframe','width=600,height=<?php echo @$sum;?>,left=100,top=100,menubar=no,toolbar=no,location=no,scrollbars=no')" value="查看">
                                    <a href="deletedingdan.php?id=<?php echo @$info1['id'];?>">删除</a>
                                    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='fadan.php?id=<?php echo @$info1[id];?>';" value="执行">
                                    </td>
                        </tr>
                </table></td>
        </tr>
    </table>
    <p>&nbsp;</p>

</body>
</html>