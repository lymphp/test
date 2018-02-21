<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查询商品</title>
    <style type="text/css">
        <!--
        .style1 {color: #FFFFFF}
        -->
    </style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
    <form name="form1" method="post" action="__URL__/selectGoods">
        <p>&nbsp;</p>
        <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">

                        <tr bgcolor="#7fffd4">
                            <td height="40" colspan="10" style="font-size: 24px;"><div align="center">商品信息编辑</div></td>
                        </tr>
                        <tr>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">商品数量</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">上市时间</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">商品产地</div></td>
                            <td width="102" bgcolor="#FFFFFF"><div align="center">商品简介</div></td>
                          
                        </tr>
                        <?php if(is_array($selectGoods)): $i = 0; $__LIST__ = $selectGoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sel): ++$i;$mod = ($i % 2 )?><tr>
                                
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_name"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_number"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_marketPrice"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_vipPrice"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_addtime"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_place"]); ?></div></td>
                                <td height="25" bgcolor="#FFFFFF">
                                    <div align="center"><?php echo ($sel["goods_introduction"]); ?></div></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </table></td>
            </tr>
        </table>
        <p>&nbsp;<?php echo ($page); ?></p>
        <p>&nbsp;</p>
    </form>
</body>
</html>