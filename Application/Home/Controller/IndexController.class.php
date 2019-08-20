<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $title ='首页';
        $this->assign('title',$title);

        $test = 20;
        $test1 = 21;

        $name = 2;
        $this->assign('name', $name);
        $this->assign('test', $test);
        $this -> assign('test1', $test1);


        $this -> display();
    }

    public function about(){
        $title ='关于我们';
        $this->assign('title',$title);
        $this -> display();
    }

    public function person(){
        $title ='个人信息';
        $this->assign('title',$title);
        $this -> display();
    }

    public function other(){
        $t ='其他';
        $this->assign('title',$t);
        $this -> display();
    }
}
