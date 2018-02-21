<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminAction
 *
 * @author garl
 */
class AdminAction extends Action {

    public function editName() {
        $admin = M('admin');
        $n0 = $_POST['n0'];
        //echo $n0;
        $selectadmin=$admin->where("adminname='".$n0."'")->field('id')->find();
        //var_dump($selectadmin);
        //echo $selectadmin['id'];
        if($selectadmin==false){
            echo "<script>alert('不存在此用户!');history.back();</script>";
            exit;
        }else{
                $admin = M('admin');
                $data['adminname'] = $_POST['adminname'];
                $data['password'] = $_POST['p1'];
                $editName=$admin->where('id='.$selectadmin['id'])->save($data);
                //var_dump($editName);
                echo "<script>alert('修改管理员的名称和密码成功!');history.back();</script>";
        }
       
    }

}
