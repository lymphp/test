<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>添加商品</title>
        <script language="javascript">
            function chkinput(form)
            {
                if (form.goods_name.value == "")
                {
                    alert("请输入商品名称！");
                    form.goods_name.select();
                    return(false);
                }
                if (form.goods_number.value == "") {
                    alert("请输入商品数量！");
                    form.goods_number.select();
                    return(false);
                }
                if (form.goods_marketPrice.value == "") {
                    alert("请输入商品的市场价！");
                    form.goods_marketPrice.select();
                    return(false);
                }
                if (form.goods_vipPrice.value == "") {
                    alert("请输入商品的会员价！");
                    form.goods_vipPrice.select();
                    return(false);
                }
                if (form.goods_place.value == "") {
                    alert("请输入商品的产地！");
                    form.goods_place.select();
                    return(false);
                }
                if(form.goods_typeid.value == "0"){
                    alert("请选择商品的类型！");
                    form.goods_typeid.select();
                    return(false);
                }
                if (form.goods_introduction.value == "") {
                    alert("请输入商品简介！");
                    form.goods_introduction.select();
                    return(false);
                }
                if (form.goods_detailedIntroduction.value == "") {
                    alert("请输入商品的详细简介！");
                    form.goods_detailedIntroduction.select();
                    return(false);
                }
                return(true);
            }
        </script>
    </head>

    <body topmargin="0" leftmargin="0" bottommargin="0">
        <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr height="40"><td>
                    &nbsp;
                </td></tr>
            <tr>
                <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size:24px;">修改商品<div></td>
            </tr>
            <tr>
                <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">
                        

                        <form name="form1" enctype="multipart/form-data" method="post" action="__URL__/updateGoods" onSubmit="return chkinput(this)">
                            <!--隐藏域-->
                            <input name="id" type="hidden" value="<?php echo ($updateGoodsForm["id"]); ?>" />
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_name" size="25" class="inputcss" value="<?php echo ($updateGoodsForm["goods_name"]); ?>" /></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品数量：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_number" size="25" class="inputcss" value="<?php echo ($updateGoodsForm["goods_number"]); ?>"  /></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">市场价：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_marketPrice" size="25" class="inputcss" value="<?php echo ($updateGoodsForm["goods_marketPrice"]); ?>" />元/kg</div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">会员价：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_vipPrice" size="25" class="inputcss" value="<?php echo ($updateGoodsForm["goods_vipPrice"]); ?>" />元/kg</div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">上市时间：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <?php echo ($updateGoodsForm["goods_addtime"]); ?>
                                    </div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <input name="goods_recommendation" type="radio" value="1"  <?php if($updateGoodsForm["goods_recommendation"] == '1' ): ?>checked='checked'<?php endif; ?>  />是&nbsp; <input name="goods_recommendation" type="radio" value="0" <?php if($updateGoodsForm["goods_recommendation"] == '0' ): ?>checked="checked"<?php endif; ?> />否<br/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品产地：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><d'iv align="left"><input type="text" name="goods_place" size="25" class="inputcss" value="<?php echo ($updateGoodsForm["goods_place"]); ?>" /></div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">商品类型：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        
                                        <?php echo ($smalltype["smalltype_name"]); ?>
                                       
                                    </div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">商品图片：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <image src="<?php echo ($updateGoodsForm["goods_images1"]); ?>" width="150" height="150" />
                                        <image src="<?php echo ($updateGoodsForm["goods_images2"]); ?>" width="150" height="150" />
                                    </div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">简介：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><textarea name="goods_introduction" cols="80" rows="4" class="inputcss"><?php echo ($updateGoodsForm["goods_introduction"]); ?></textarea></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">详细介绍：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><textarea name="goods_detailedIntroduction" cols="80" rows="4" class="inputcss"><?php echo ($updateGoodsForm["goods_detailedIntroduction"]); ?></textarea></div></td>
                            </tr>
                            <tr>
                                <td height="25" colspan="2" bgcolor="#FFFFFF">
                                    <div align="center">
                                        <input name="button" type="submit" class="buttoncss" id="submit" value="确认修改" />
                                        
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table></td>
            </tr>
        </table>
    </body>
</html>