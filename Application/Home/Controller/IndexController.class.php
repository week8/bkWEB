<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $title ='HOME';
        $motto = '你总是这样轻言放弃的话  无论过多久都只会原地踏步  -- 哆啦A梦';
        $this->assign('title',$title);
        $this->assign('motto',$motto);

        $User = M('Home','think_','mysql://root@localhost/thinkphp#utf8');  //Home：模块   think_：thinkphp数据库think_开头的表   thinkphp：数据库
        $list = $User->select();
        $this->assign('list',$list);

        $this -> display();
    }

    /* *********************************************************************  skill start  ******************************************************************* */
    public function skill(){
        $title ='SKILL';
        $motto = '无论知识有多新，项目有多难，只要来了什么姿势都要上';
        $this->assign('title',$title);
        $this->assign('motto',$motto);

        $this -> display();
    }
    public function cssCollection(){
        $t ='SKILL > CSS';
        $motto = '浅喜似苍狗，深爱如长风';
        $this->assign('title',$t);
        $this->assign('motto',$motto);

        $this -> display();
    }
    /* *********************************************************************  skill end  ******************************************************************* */

    public function resume(){
        $title ='RESUME';
        $motto = '运气也是实力的一部分';
        $this->assign('title',$title);
        $this->assign('motto',$motto);

        $this -> display();
    }

    public function other(){
        $t ='OTHER';
        $motto = '愿你此生尽幸，赤诚善良；愿你所有快乐，无需假装';
        $this->assign('title',$t);
        $this->assign('motto',$motto);

        $this -> display();
    }

}
