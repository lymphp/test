<?php

// 本文档自动生成，仅供测试运行
class IndexAction extends Action {

    public function index() {
        $smalltype = M('smalltype');
        if ($selectsmalltype1 = $smalltype->where('type_id=1')->select()) {
            //var_dump($selectsmalltype1);
            $this->assign('selectsmalltype1', $selectsmalltype1);
            if ($selectsmalltype2 = $smalltype->where('type_id=2')->select()) {

                $this->assign('selectsmalltype2', $selectsmalltype2);
                if ($selectsmalltype3 = $smalltype->where('type_id=3')->select()) {

                    $this->assign('selectsmalltype3', $selectsmalltype3);
                    if ($selectsmalltype4 = $smalltype->where('type_id=4')->select()) {

                        $this->assign('selectsmalltype4', $selectsmalltype4);
                        if ($selectsmalltype5 = $smalltype->where('type_id=5')->select()) {

                            $this->assign('selectsmalltype5', $selectsmalltype5);
                        } else {
                            echo "";
                        }
                    } else {
                        echo "";
                    }
                } else {
                    echo "";
                }
            } else {
                echo "";
            }
        } else {
            echo "";
        }

        $notice = M('notice');
        $selectnotice = $notice->select();
        $this->assign('selectnotice', $selectnotice);

        $goods = M('goods');
        $selectgoodsre = $goods->where('recomend=1')->limit(4)->select();
        if ($selectgoodsre == TRUE) {
            $this->selectgoodsre = $selectgoodsre;
        }
        $selectgoodsadd = $goods->order('goods_addtime')->limit(4)->select();
        if ($selectgoodsadd == TRUE) {
            $this->selectgoodsadd = $selectgoodsadd;
        }
        $this->display('index');
    }

    public function loginverify() {
        if ($_SESSION['verify'] != md5($_POST['verify'])) {
            $this->redirect('Index/login', '', 2, '验证码不正确！');
        }
        $user = M('user');
        /* $username = $_POST['username'];
          $password = $_POST['password'];
          $findusername = $user->where("username='" . $username . "'")->find();
          $findpassword = $user->where("password='" . $password . "'")->find();
          if ($findusername == TRUE && $findpassword == TRUE) { */
        if (isset($_POST['username'])) {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $db = M();       // 实例化模型类,参数数据表名称，不包含前缀
                $select = $db->query("select * from think_user where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'");
                if ($select) {
                    $_SESSION['user'] = $_POST['username'];

                    $smalltype = M('smalltype');
                    if ($selectsmalltype1 = $smalltype->where('type_id=1')->select()) {
                        //var_dump($selectsmalltype1);
                        $this->assign('selectsmalltype1', $selectsmalltype1);
                        if ($selectsmalltype2 = $smalltype->where('type_id=2')->select()) {

                            $this->assign('selectsmalltype2', $selectsmalltype2);
                            if ($selectsmalltype3 = $smalltype->where('type_id=3')->select()) {

                                $this->assign('selectsmalltype3', $selectsmalltype3);
                                if ($selectsmalltype4 = $smalltype->where('type_id=4')->select()) {

                                    $this->assign('selectsmalltype4', $selectsmalltype4);
                                    if ($selectsmalltype5 = $smalltype->where('type_id=5')->select()) {

                                        $this->assign('selectsmalltype5', $selectsmalltype5);
                                    } else {
                                        echo "";
                                    }
                                } else {
                                    echo "";
                                }
                            } else {
                                echo "";
                            }
                        } else {
                            echo "";
                        }
                    } else {
                        echo "";
                    }

                    $notice = M('notice');
                    $selectnotice = $notice->select();
                    $this->assign('selectnotice', $selectnotice);

                    $goods = M('goods');
                    $selectgoodsre = $goods->where('recomend=1')->limit(4)->select();
                    if ($selectgoodsre == TRUE) {
                        $this->selectgoodsre = $selectgoodsre;
                    }
                    $selectgoodsadd = $goods->order('goods_addtime')->limit(4)->select();
                    if ($selectgoodsadd == TRUE) {
                        $this->selectgoodsadd = $selectgoodsadd;
                    }

                    $this->redirect('Index/index', '', 2, '用户 ' . $_POST['username'] . ' 登录成功！请稍等......');  //页面重定向		
                } else {
                    $this->redirect('Index/login', '', 2, '用户名或者密码不正确！');  //页面重定向		
                }
            } else {
                $this->redirect('Index/login', '', 2, '用户名、密码不能为空！');  //页面重定向					
            }
        }

        /* $this->display('index');
          } else {
          $this->redirect('Index/login', '', 2, '用户名或者密码不正确！');
          } */
    }
    
    public function logout() {
        unset($_SESSION['user']);
        $this->index();
    }

    public function verify() {
        import("ORG.Util.Image");
        $imag = Image::buildImageVerify();
    }
    
    public function showrecomend() {
        $goods = M('goods');
        $selectgoods=$goods->select();
        $this->assign('selectgoods',$selectgoods);
        $this->display('showrecomend');
    }
    
    public function lookInfo() {
        $goods = M('goods');
        $comment = M('comment');
        $user = M('user');
        $id=$_GET['id'];
        $count=$comment->where('spid='.$id)->count();
        //根据id查询评论
        $selectcomment=$comment->where('spid='.$id)->select();
        //var_dump($selectcomment);
        //通过id查出userid
        $selectUserId=$comment->where('spid='.$id)->field(userid)->select();
        //查出userid的条数
        $countSU=$comment->where('spid='.$id)->field(userid)->count();
        //echo $countSU;
        //var_dump($selectUserId);
        
        for($i=0;$i<$countSU;$i++){
        $selectUser=$user->where('id='.$selectUserId[$i]["userid"])->select();
        //echo $i;
        //var_dump($selectUser);
        $selectAllUser[]=$selectUser; 
        
        }
        $userList = [];
        foreach($selectAllUser as &$arr){
            array_push($userList,$arr[0]);
            //var_dump($userList);
        }
//       var_dump($userList);
//       return;
        $goodlookInfo=$goods->where('id='.$id)->find();
        $this->count=$count;
        //$this->countSu=$countSU;
        
        //var_dump($selectcomment);
        //$this->selectUser=$selectUser;
        
        $this->goodlookInfo=$goodlookInfo;
        $this->userList=$userList;
        $this->assign('selectcomment',$selectcomment);
        $this->assign('selectAllUser',$selectAllUser);
        
        $this->display('lookInfo');
    }
    
    public function savecomment() {
        $comment = M('comment');
        $user=M('user');
        $data['spid']=$_GET['id'];
        $data['userid'] = $user->where("username='".$data['username']."'")->field(id)->find();
        $data['dengji']=$_POST['dengji'];
        $data['content']=$_POST['content'];
        $data['time']=date("Y-m-j");
        $comment->create();
        $savecomment=$comment->add($data);
        $this->lookInfo();
    }
    
    public function usercenter() {
        $user = M('user');
        $selectuser=$user->where("username='".$_SESSION['user']."'")->find();
        $this->selectuser=$selectuser;
        $this->display('usercenter');
    }
    
    public function userleaveword() {
       
        $this->display('userleaveword');
    }
    
    public function looktype() {
        $smalltype=M('smalltype');
        $goods = M('goods');
        $id=$_GET[id];
        //var_dump($id);
        $selectst=$smalltype->where('id='.$id)->select();
        //var_dump($selectst);
        $countsp=$goods->where('goods_typeid='.$id)->count();
        //var_dump($countsp);
        $selectsp=$goods->where('goods_typeid='.$id)->order('goods_addtime')->select();
        $this->selectst=$selectst;
        $this->countsp=$countsp;
        $this->assign('selectsp',$selectsp);
        $this->display('looktype');
    }
    
    public function gengduo(){
	        $db = M('notice');							// 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->select(); 					// 查询数据
		$this->assign('select',$select); 			// 模板变量赋值
		$this->display("gengduo"); 
   }
   
   public function gonggaoxiangqin(){   
	        $db = M('notice');							// 实例化模型类,参数数据表名称，不包含前缀
                $select = $db->where('id='.$_GET['id'])->select();
                $this->select=$select;
                //var_dump($select);                
		$this->display("gonggaoxiangqin");
	}
        
        public function savereg() {
            $user = M('user');
            $data['username']=$_POST['username'];
            $data['email']=$_POST['email'];
            $data['sfzh']=$_POST['sfzh'];
            $data['tel']=$_POST['tel'];
            $data['qq']=$_POST['qq'];
            if($_POST['tishi1'] == 1){
            $data['tishi']=$_POST['tishi2'];
            }else{
                $data['tishi']=$_POST['tishi1'];
            }
            $data['huida']=$_POST['huida'];
            $data['dizhi']=$_POST['dizhi'];
            $data['youbian']=$_POST['youbian'];
            $data['password']=$_POST['password'];
            $data['truename']=$_POST['truename'];
            $data['regtime']=date("Y-m-j");
            
            $user->create();
            $adduser=$user->add($data);
            $this->display('login');
        }
        
        public function search() {
            import("ORG.Util.Page");       // 导入分页类
            $demo=isset($_POST['goods_name'])?$_POST['goods_name']:$_SESSION['demo2'];
            //判断keywords存在与否，判断取值，解决下一页问题
            $goods = M('goods'); // 实例化数据对象		
            $_SESSION['demo2']=$demo;//本地存储goods_name值		
            $demo3=$_SESSION['demo2'];//赋值给		
            $count = $goods->where("goods_name like '%$demo3%'")->count();// 查询满足要求的总记录数		
            
            $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
            $show = $Page->show();// 分页显示输出		
            $orderby['id']='desc';// 排序条件		
            $list = $goods->where("goods_name like '%$demo3%'")->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->count=$count;
            $this->assign('list',$list);// 赋值数据集		
            $this->assign('page',$show);// 赋值分页输出		
            $this->assign('test',$where);		
            $this->display('search'); // 输出模板
        }
        
        public function changeuser(){
            $user = M('user');
            $data['truename']=$_POST['truename'];
            $data['email']=$_POST['email'];
            $data['qq']=$_POST['qq'];
            $data['tel']=$_POST['tel'];
            $data['dizhi']=$_POST['dizhi'];
            $data['youbian']=$_POST['youbian'];
            $data['sfzh']=$_POST['sfzh'];
            $user->create();
            $changeuser = $user->where("username='".$_SESSION['user']."'")->save($data);
            $this->usercenter();
        }
        
        public function saveuserleaveword() {
            $leaveword = M('leaveword');
            $user = M("user");
            $data["content"] = $_POST["content"];
            $data["time"] = date("Y-m-j");
            $selectUserId = $user->where("username='".$_SESSION["user"]."'")->field(id)->find();
            $data["userid"]=$selectUserId["id"];
            //echo $selectUserId["id"];
            $saveleaveword = $leaveword->add($data);
            $this->usercenter();
        }
        
        public function changeUserpassword() {
            $user = M('user');
            $p1=$_POST['p1'];
            $selectpassword = $user->where("username='".$_SESSION['user']."'")->field(password)->find();
            $password = $selectpassword['password'];
            if($password == $p1){
                $data['password']=$_POST['p2'];
                $user->create();
                $change = $user->where("username='".$_SESSION['user']."'")->save($data);
                $this->usercenter();
            }
            else{
                echo "<script>alert('修改失败，原密码错误!');history.back();</script>";
            }
        }

}

?>