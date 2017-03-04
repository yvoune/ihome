<?php
namespace Home\Controller;
use Think\Controller;
class FormController  extends Controller {
    public function insert(){
        $RD = D('roomdetails');
        if($RD->create()){
            $result = $RD->add();
            if($result){
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($RD->getError());
        }
    }
    public function read($rdid=0){
        $RD   =   M('roomdetails');
        // 读取数据
        $data =   $RD->find($rdid);
        if($data) {
            $this->assign('data',$data);// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
}