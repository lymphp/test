<?php
/**
 * Created by PhpStorm.
 * User: garl
 * Date: 2017/11/4
 * Time: 22:37
 */
class CarAction extends action {
public function caragency(){
    //这里是判断商品是否是第一次fangrugouwuche
    if(isset($_POST['car'])){
        //print_r($_POST['car']);
        //print_r($_SESSION['car']);
        foreach($_POST['car'] as $value){
            //如果购物车了有该商品执行 ++;
            //条件：
            //点击过“放入购物车”---存在数组$_SESSION['car'];
            //判断哪件商品-----判断该商品的名称是否在数组里出现过
            //array_key_exists(下标，数组);
            if(isset($_SESSION['car']) && array_key_exists($value,$_SESSION['car'])){
                $_SESSION['car'][$value]++;
            }else{
                //购物车里如果没有该商品，创建一维数组$_SESSION['car']
                $_SESSION['car'][$value]=1;
            }
        }
        /* foreach($_SESSION['car'] as $key=>$value){

        echo $key;*/


        $this->cars('products',1);
        /*header("location:".__URL__."/car");*/
        $this->car();


        /*} */
        //$this->display();



    }
}
    public function car(){
        if(isset($_SESSION['user_name'])){

            $this->cars('products',1);
            $this->alls();
            $this->display();


        }else{echo '<script>alert("请登陆");window.location.href="'.__URL__.'/login"</script>';
            header("location:".__URL__."/login");

        }
    }
}