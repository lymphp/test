<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserAction
 *
 * @author garl
 */
class UserAction extends Action {
    //put your code here
    public function userList(){
        $user = M('user');
        
        import("ORG.Util.Page");       // 导入分页类
        $count = $user->count();        // 统计总记录数
        //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $user->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        
        $userLis=$user->select();
        $this->assign('userList',$userLis);
        $this->display('userList');
    }
    
    public function deleteUser() {
        $user = M('user');
        
        while (list($name, $value) = each($_POST)) {
            $userList=$user->where('id=' . $value)->delete();
            /*mysql_query("delete from user where id=" . $value . "", $conn);
            mysql_query("delete from pingjun where userid=" . $value . "");
            mysql_query("delete from liuyan where userid=" . $value . "", $conn);*/
        }
        $this->display('deleteSuccess');
    }
    
    public function userInfo() {
        $user =M('user');
        $id = $_GET['id'];
        $userInfo=$user->where('id='.$id)->find();
        $this->userInfo=$userInfo;
        $this->display('userInfo');
    }
    
    public function userLeaveWord(){
        $leaveword = M('leaveword');
        $count=$leaveword->count();
        if($count==0){
            echo "暂无用户留言！";
        } else {
            import("ORG.Util.Page");       // 导入分页类
            $count = $leaveword->count();        // 统计总记录数
            //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
            $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
            $show = $Page->show();        // 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $leaveword->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('select', $list); // 赋值数据集
            $this->assign('page', $show); // 赋值分页输出
            
            $leavewordInfo=$leaveword->select();
            $this->assign('leavewordInfo',$leavewordInfo);
            $leavewordUser=$leaveword->table('think_leaveword leaveword,think_user user')
                                    ->where('leaveword.userid = user.id')
                                    ->field('user.username')
                                    ->select();
            $this->assign('leavewordUser',$leavewordUser);
            $this->display('userLeaveWord');
        }
        
    }
    
    public function deleteLeaveWord() {
        $leaveword = M('leaveword');
        $id = $_GET['id'];
        $deleteleaveword = $leaveword->where('id='.$id)->delete();
        echo "<script>alert('删除留言成功!');history.back('../__URL__/userLeaveWord');</script>";
    }
}
