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
                <td height="40" bgcolor="#7fffd4"><div align="center" style="font-size:24px;">添加商品<div></td>
            </tr>
            <tr>
                <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">

                        <form name="form1"  enctype="multipart/form-data" method="post" action="__URL__/addGoods" onSubmit="return chkinput(this)">
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_name" size="25" class="inputcss" /></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品数量：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_number" size="25" class="inputcss" /></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">市场价：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_marketPrice" size="25" class="inputcss" />元/kg</div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">会员价：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_vipPrice" size="25" class="inputcss" />元/kg</div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">上市时间：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <select name="nian" class="inputcss">

                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>

                                        </select>
                                        年
                                        <select name="yue" class="inputcss">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>

                                        </select>
                                        月
                                        <select name="ri" class="inputcss">


                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>

                                        </select>
                                        日</div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <!--<select name="goods_recommendation" class="inputcss" >
                                            <option selected value="1">是</option>
                                            <option value="0">否</option>
                                        </select>-->
                                        <input name="goods_recommendation" type="radio" value="1" checked />是&nbsp; <input name="goods_recommendation" type="radio" value="0" />否<br/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品产地：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="goods_place" size="25" class="inputcss" /></div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">商品类型：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        
                                        <select name="goods_typeid" class="inputcss">
                                            <option value="0">请选择类型</option>
                                            <?php if(is_array($selectsmalltype)): $i = 0; $__LIST__ = $selectsmalltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sst): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($sst["id"]); ?>"><?php echo ($sst["smalltype_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                       
                                    </div></td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#FFFFFF"><div align="center">商品图片：</div></td>
                                <td height="25" bgcolor="#FFFFFF"><div align="left">
                                        <input type="file" name="file1">
                                        <input type="file" name="file2">
                                    </div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">简介：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><textarea name="goods_introduction" cols="80" rows="4" class="inputcss"></textarea></div></td>
                            </tr>
                            <tr>
                                <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">详细介绍：</div></td>
                                <td width="618" bgcolor="#FFFFFF"><div align="left"><textarea name="goods_detailedIntroduction" cols="80" rows="4" class="inputcss"></textarea></div></td>
                            </tr>
                            <tr>
                                <td height="25" colspan="2" bgcolor="#FFFFFF">
                                    <div align="center">
                                        <input name="submit" type="submit" class="buttoncss" id="submit" value="添加" />
                                        &nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss" />
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table></td>
            </tr>
        </table>
    </body>
</html>