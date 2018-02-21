<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderAction
 *
 * @author garl
 */
class OrderAction extends Action {

    public function selectOrder() {
        $order = M('order');
        $username = $_POST['username'];
        $ddh = $_POST['ddh'];
        if ($username == "") {
            $selectOrder = $order->where("dingdanhao='" . $ddh . "'")->find();
        } elseif ($ddh == "") {
            $selectOrder = $order->where("xiadanren='" . $username . "'")->find();
        } else {
            $selectOrder = $order->where("xiadanren='" . $username . "'" and "dingdanhao='" . $ddh . "'")->find();
        }
        if ($selectOrder == false) {
            echo "对不起,没有查找到该订单!";
        } else {
            $this->selectOrder = $selectOrder;
            $this->display('selectOrder');
        }
    }

    public function editOrderForm() {
        $order = M('order');
        $count=$order->count();
        if($count==0){
            echo "暂无任何订单！";
        }
        $selectOrder = $order->select();
        $this->assign('selectOrder', $selectOrder);
        $this->display('editOrderForm');
    }

    public function chakOrder() {
        $order = M('order');
        $goods = M('goods');
        $id = $_GET['id'];
        $selectorder = $order->where('id=' . $id)->find();
        $goodId = $order->where('id=' . id)->field('spc')->find();
        $selectgood = $goods->where('id=' . $goodId['spc'])->find();
        $this->selectgood = $selectgood;
        $this->selectorder = $selectorder;
        $this->display('chakOrder');
    }

    public function send() {
        $order = M('order');
        $goods = M('goods');
        $id = $_GET['id'];
        echo $id;
        $selectorder = $order->where('id=' . $id)->find();
        //var_dump($selectorder);
        $goodId = $order->where('id=' . id)->field('spc')->find();
        $selectgood = $goods->where('id=' . $goodId['spc'])->find();
        $this->selectgood = $selectgood;
        $this->selectorder = $selectorder;
        $this->display('send');
    }

    public function updateOrder() {
        $order = M('order');
        $id=$_GET['id'];
        $ysk = $_POST[ysk] . "&nbsp;";
        $yfh = $_POST[yfh] . "&nbsp;";
        $ysh = $_POST[ysh] . "&nbsp;";
        $zt = "";
        if ($ysk != "&nbsp;") {
            $zt .= $ysk;
        }
        if ($yfh != "&nbsp;") {
            $zt .= $yfh;
        }
        if ($ysh != "&nbsp;") {
            $zt .= $ysh;
        }
        if (($ysk == "&nbsp;") && ($yfh == "&nbsp;") && ($ysh == "&nbsp;")) {
            echo "<script>alert('请选择处理状态!');history.back();</script>";
            exit;
        }
        $updateorder=$order->where('id='.$id)->setfield('zt',$ysk.$yfh.$ysh);
        echo "修改成功！";
        
        /*if ($zt == "未作任何处理") {
            @$sql = mysql_query("select * from dingdan where id='" . $_GET[id] . "'", $conn);
            @$info = mysql_fetch_array($sql);
            @$array = explode("@", $info[spc]);
            @$arraysl = explode("@", $info[slc]);

            for ($i = 0; $i < count($array); $i++) {
                @$id = $array[$i];
                @$num = $arraysl[$i];
                mysql_query("update shangpin set cishu=cishu+'" . @$num . "' ,shuliang=shuliang-'" . @$num . "' where id='" . @$id . "'", $conn);
            }
        }*/
    }
    public function deleteOrder() {
        $order = M('order');
        $id=$_GET['id'];
        $deleteorder=$order->where('id='.$id)->delete();
        echo "删除成功！";
    }

}
