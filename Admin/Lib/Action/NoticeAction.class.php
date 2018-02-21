<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticeAction
 *
 * @author garl
 */
class NoticeAction extends Action {

    public function noticeGuanLi() {

        $notice = M('notice');
        import("ORG.Util.Page");       // 导入分页类
        $count = $notice->count();
        if ($count == 0) {
            echo "暂无公告";
        }
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $notice->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出

        $noticeGuanLi = $notice->select();
        $this->assign('noticeGuanLi', $noticeGuanLi);
        $this->display('noticeGuanli');
    }

    public function selectNotice() {
        $notice = M('notice');
        $id = $_GET['id'];
        $selectNotice = $notice->where('id=' . $id)->find();
        $this->selectNotice = $selectNotice;
        $this->display('selectNotice');
    }

    public function updateNotice() {
        $notice = M('notice');
        $id = $_POST['id'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $selectNotice = $notice->where('id=' . $id)->save($data);
        $this->display('updateNoticeSuccess');
        //echo "<script>alert('公告修改成功!');history.back('__URL__/noticeGuanLi');</script>";
    }

    public function deleteNotice() {
        $notice = M('notice');
        $id = $_GET['id'];
        $deleteNotice = $notice->where('id=' . $id)->delete();
        $this->deleteNotice = $deleteNotice;
        $this->display('deleteNoticeSuccess');
    }

    public function addNotice() {
        $notice = M('notice');
        $notice->create();
        $addNotice = $notice->add();
        $this->display('addNoticeSuccess');
    }

    public function commentGuanLi() {
        $comment = M('comment');

        $goods = M('goods');
        $user = M('user');
        $count = $comment->count();
          if($count==0){
          echo "暂无用户评论";
          }
        
        $selectcomment = $comment->select();
        $this->assign('selectcomment', $selectcomment);
        
        $comment=M('comment');
        $selectgoodsname=$comment->table('think_comment comment,think_goods goods')
                ->where('comment.spid=goods.id')
                ->field('comment.spid,goods.id,goods.goods_name')
                ->select();
        //var_dump($list);
        $this->assign('selectgoodsname', $selectgoodsname);
        
       $selectusername=$comment->table('think_comment comment,think_user user')
                        ->where('comment.userid=user.id')
                        ->field('comment.userid,user.id,user.username')
                        ->select();
       $this->assign('selectusername',$selectusername);
       
        $this->display('commentGuanLi');
    }
    
    public function deleteComment() {
        $comment = M('comment');
        $id=$_GET['id'];
        $deletecomment=$comment->where('id='.$id)->delete();
        $this->display('deleteComment');
    }

}
