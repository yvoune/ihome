<?php
namespace Home\Model;
use Think\Model;
// class FormModel extends Model{
//     // 定义自动验证
//     protected $_validate = array(
//         array('introduce','require',"房屋简述必须填写"),
//     );
//     // 定义自动完成
//     // protected $_auto = array(
//     //     array('create_time','time',1,'function'),
//     // );
// }
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('title','require','标题必须'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
 }