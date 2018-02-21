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

    public function findddForm() {
        $this->display('findddForm');
    }

    public function finddd() {
        $order = M('order');
        if ($_POST[show_find] != "") {
            $username1 = $_POST[username1];
            $ddh = $_POST[ddh];
            if ($_POST[show_find] != "") {
                if ($username1 == "") {
                    $selectorder = $order->where("dingdanhao='" . $ddh . "'")->select();
                } elseif ($ddh == "") {
                    $selectorder = $order->where("xiadanren='" . $username1 . "'")->select();
                } else {
                    $selectorder = $order->where("xiadanren='" . $username1 . "' and dingdanhao='" . $ddh . "'")->select();
                }
            }

            //var_dump($selectorder);
            $this->selectorder = $selectorder;
            $this->display('findddForm');
        }
    }

}
