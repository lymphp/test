<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>商品订单</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        .style2 {color: #000000}
        -->
    </style>
    <script>
                    function prn()
                    {
                        document.all.WebBrowser1.ExecWB(7,1);
                    }
    </script>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="800"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr height="50">
        <td>
            &nbsp;
        </td>
    </tr>
    <tr bgcolor="#7fffd4">
        <td height="40" colspan="2"><div align="center" style="font-size: 24px;">商品订单</div></td>
    </tr>
    <tr>
        <td width="448" height="20"><div align="left"><span class="style2">订单号：</span><?php echo ($selectorder["dingdanhao"]); ?></div></td>
        <td width="152"><div align="right">
                
                <object   ID='WebBrowser1'   WIDTH=0   HEIGHT=0   CLASSID='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2'></object>
                <input type="button" value="打印预览" class="buttoncss" onClick="prn()">&nbsp;
                <input type="button" value="打印" class="buttoncss" onClick="window.print()"></div></td>
    </tr>
    <tr>
        <td height="20" colspan="2"><div align="left" class="style2">商品列表(如下)：</div></td>
    </tr>
</table>
<table width="700" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td bgcolor="#666666"><table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr bgcolor="#deb887" height="35">
                    <td width="80"><div align="center" class="style1">图片</div></td>
                    <td width="153" height="20"><div align="center" class="style1">商品名称</div></td>
                    <td width="80"><div align="center" class="style1">市场价</div></td>
                    <td width="80"><div align="center" class="style1">会员价</div></td>
                    <td width="80"><div align="center" class="style1">数量</div></td>
                    <td width="101"><div align="center" class="style1">小计</div></td>
                </tr>
                    <tr bgcolor="#FFFFFF">
                        <td height="20"><div align="center"><img src="../<?php echo @$info1['tupian'];?>" width="80" height="80"> </div></td>
                        <td height="20"><div align="center"><?php echo @$info1[mingcheng];?></div></td>
                        <td height="20"><div align="center"><?php echo @$info1[shichangjia];?></div></td>
                        <td height="20"><div align="center"><?php echo @$info1[huiyuanjia];?></div></td>
                        <td height="20"><div align="center"><?php echo @$arraysl[$i];?></div></td>
                        <td height="20"><div align="center"><?php echo @$arraysl[$i]*@$info1[huiyuanjia];?></div></td>
                    </tr>
                <tr bgcolor="#FFFFFF">
                    <td height="30" colspan="6">
                        <div align="right">总计费用:<?php echo $total;?>&nbsp;元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div></td>
                </tr>
            </table></td>
    </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="81" height="20"><div align="left" class="style2">下单人：</div></td>
        <td colspan="3"><div align="left"><?php echo @$info[xiadanren];?></div></td>
    </tr>
    <tr>
        <td height="20"><div align="left" class="style2">收货人：</div></td>
        <td height="20" colspan="3"><div align="left"><?php echo @$info[shouhuoren];?></div></td>
    </tr>
    <tr>
        <td height="20"><div align="left" class="style2">收货人地址：</div></td>
        <td height="20" colspan="3"><div align="left"><?php echo @$info[dizhi];?></div></td>
    </tr>
    <tr>
        <td height="20"><div align="left" class="style2">邮&nbsp;&nbsp;编：</div></td>
        <td width="145" height="20"><div align="left"><?php echo @$info[youbian];?></div></td>
        <td width="66"><div align="left" class="style2">电&nbsp;&nbsp;话：</div></td>
        <td width="158"><div align="left"><?php echo @$info[tel];?></div></td>
    </tr>
    <tr>
        <td height="20"><div align="left" class="style2">E-mail:</div></td>
        <td height="20"><div align="left"><?php echo @$info[email];?></div></td>
        <td height="20">&nbsp;</td>
        <td height="20">&nbsp;</td>
    </tr>
    <tr>
        <td height="20"><div align="left" class="style2">送货方式：</div></td>
        <td height="20"><div align="left"><?php echo @$info[shff];?></div></td>
        <td height="20"><div align="left" class="style2">支付方式：</div></td>
        <td height="20"><div align="left"><?php echo @$info[zfff];?></div></td>
    </tr>
    <tr>
        <td height="20" colspan="4"><div align="left" class="style2">请您在一周内按您的支付方式进行汇款,汇款时注明您的订单号!汇款后请及时通知我们</div></td>
    </tr>
    <tr>
        <td height="20">&nbsp;</td>
        <td height="20"><div align="center"><input type="button" onClick="window.close()" value="关闭窗口" class="buttoncss"></div></td>
        <td height="20"><div align="center" class="style2">创建时间：</div></td>
        <td height="20"><div align="left"><?php echo @$info[time];?></div></td>
    </tr>
</table>
</body>
</html>