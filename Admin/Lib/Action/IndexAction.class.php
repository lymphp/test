<?php

class IndexAction extends Action {
    
    public function checkAdmin(){
		if(isset($_POST['adminname'])){
			if(isset($_POST['adminname']) && isset($_POST['password'])){
				$db = M();							// 实例化模型类,参数数据表名称，不包含前缀
				$select = $db->query("select * from think_admin where adminname='".$_POST['adminname']."' and password='".$_POST['password']."'");	
				if($select){
					$_SESSION['admin']=$_POST['adminname'];
					$this->redirect('Index/index','', 2,'用户 '.$_POST['adminname'].' 登录成功！');		//页面重定向		
				}else{
					$this->redirect('Index/login','', 2,'用户名或者密码不正确！');		//页面重定向		
				}
			}else{
				$this->redirect('Index/login','', 2,'用户名、密码不能为空！');		//页面重定向					
			}
		}
		$this->display('index');
	}
        
    public function welcome(){
        $this->display('welcome');
    }

    public function addGoodsForm() {
        $smalltype = M('smalltype');    // 实例化模型类,参数数据表名称，不包含前缀
        $selectsmalltype = $smalltype->select();        // 查询数据
        //var_dump($selectsmalltype);
        $this->assign('selectsmalltype', $selectsmalltype);      // 模板变量赋值
        $this->display('addGoodsForm');         // 指定模板页
    }

    
    
    public function addGoods() {
        import("ORG.Net.UploadFile");
         $goods = M('goods');
        $upload = new UploadFile(); // 实例化上传类 
        $upload->maxSize  = -1 ; // 讴置附件上传大小  
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型 
        $upload->saveRule = uniqid;//这里的时间是根据上传的图片的多少来自动改变图片的名称的（并且时间都不同，所以上传的图片的名称就不会相同）
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录 
//        var_dump($upload);
//        return;
// 保存表单数据 包括附件数据 
//         $upload->upload();
//        //$info = $upload->upload();
        
        if (!$upload->upload()) { // 上传错诣 提示错诣信息 
           // $this->error($upload->getErrorMsg());
            echo '上传错诣';
            return;
        } 
        $info = $upload->getUploadFileInfo();
//        var_dump($info);
//        return;
        $goods->create();
        $goods->goods_addtime = $_POST["nian"] . "-" . $_POST["yue"] . "-" . $_POST["ri"];
        $goods->goods_images1 = '__ROOT__/Public/Uploads/' . $info[0]["savename"];
        $goods->goods_images2 = '__ROOT__/Public/Uploads/' . $info[1]["savename"];
        if ($result = $goods->add()) {
            $this->display('addGoodsSuccessful');
        } else {
            echo "数据写入失败！";
        }
    }

    public function selectGoods() {
        $goods = M('goods');
        //$ins->select();
        
        import("ORG.Util.Page");       // 导入分页类
        $count = $goods->count();        // 统计总记录数
        //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $goods->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出

        $selectGoods = $goods->select();
        $this->assign('selectGoods', $selectGoods);
        $this->display('selectGoods');
    }

    public function addSmallType() {
        $smalltype = M('smalltype');
        $smalltype->create();
        if ($smalltype->add()) {
            $this->display('addSmallTypeSuccess');
        } else {
            echo '插入小类型失败';
        }
    }

    public function updateGoodsList() {
        $beforeUpdateGoods = M('goods');
        //$ins->select();
        import("ORG.Util.Page");       // 导入分页类
        $count = $beforeUpdateGoods->count();        // 统计总记录数
        //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $beforeUpdateGoods->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $beforeUpdateGoodsList = $beforeUpdateGoods->select();
        $this->assign('beforeUpdateGoodsList', $beforeUpdateGoodsList);
        $this->display('updateGoodsList');
    }

    public function updateGoodsForm() {

        $updateGoods = M('goods');
        $smalltypeList=M('smalltype');
        $goods_id = $_GET['id'];
        $goods_typeid = $_GET['goods_typeid'];
        $smalltype=$smalltypeList->where('id='.$goods_typeid)->find();
        $updateGoodsForm = $updateGoods->where('id=' . $goods_id)->find();
        $this->smalltype=$smalltype;
        $this->updateGoodsForm = $updateGoodsForm;
        $this->display('updateGoodsForm');
        //dump($updateGoodsForm);
        //dump($smalltype);
    }

    public function updateGoods() {
        $updateGoods = M('goods');
        $goods_id = $_POST['id'];
        $data['goods_name'] = $_POST['goods_name'];
        $data['goods_number'] = $_POST['goods_number'];
        $data['goods_marketPrice'] = $_POST['goods_marketPrice'];
        $data['goods_vipPrice'] = $_POST['goods_vipPrice'];
        $data['goods_recommendation'] = $_POST['goods_recommendation'];
        $data['goods_place'] = $_POST['goods_place'];
        $data['goods_introduction'] = $_POST['goods_introduction'];
        $data['goods_detailedIntroduction'] = $_POST['goods_detailedIntroduction'];
        $update = $updateGoods->where('id=' . $goods_id)->save($data);
        /*if ($update) {
            $this->success('修改成功');
        } else {
            $this->error('修改错误');
        }*/
        $this->display('updateGoodsSuccess');
    }

    public function deleteGoodsList() {
        $beforeDeleteGoods = M('goods');
        //$ins->select();
        
        import("ORG.Util.Page");       // 导入分页类
        $count = $beforeDeleteGoods->count();        // 统计总记录数
        //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $beforeDeleteGoods->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        
        $beforeDeleteGoodsList = $beforeDeleteGoods->select();
        $this->assign('beforeDeleteGoodsList', $beforeDeleteGoodsList);
        $this->display('deleteGoodsList');
    }

    public function deleteGoods() {
        $deleteGoods = M('goods');
        $goods_id = $_GET['id'];
        $deleteGoodsInfo = $deleteGoods->where('id=' . $goods_id)->find();
        // 根据id删除商品数据         

        $deleteGoodsSuccess = $deleteGoods->where('id=' . $goods_id)->delete();

        /*if ($deleteGoodsSuccess) {

            $this->success('删除成功！');
        } else {

            $this->error('删除错误！');
        }*/

        $this->deleteGoodsInfo = $deleteGoodsInfo;
        $this->display('deleteGoodsSuccess');
    }
    
    public function deleteSmallTypeList() {
        $deletesmalltype=M('smalltype');
        
        import("ORG.Util.Page");       // 导入分页类
        $count = $deletesmalltype->count();        // 统计总记录数
        //$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
        $Page = new Page($count, 15);      // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();        // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $deletesmalltype->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        
        
        $dst=$deletesmalltype->select();
        $this->assign('dst',$dst);
        $this->display('deleteSmallTypeList');
    }
    public function deleteSmallTypeSuccess() {
        $id=$_GET['id'];
        $smalltype=M('smalltype');
        $deletesmalltype=$smalltype->where('id='.$id)->delete();
        $this->deletesmalltype=$deletesmalltype;
        $this->display('deleteSmallTypeSuccess');
    }

}

?>