<?php
namespace Home\Model;

use Think\Model;

class PublishingModel extends Model{

	protected $_validate=array(
			array('user_name','','管理员用户名已存在！','3','unique'),
			array('beginRentTime','require','开始出租时间不能为空'),
            array('endRentTime','require','结束出租时间不能为空'),
            array('rents','require','租金不能为空'),
            array('rents','number','租金只能是数字'),
            array('perRents','require','租金单位不能为空'),
            array('peopleIn','require','可入住人数不能为空'),
            array('peopleIn','number','可入住人数只能是数字'),
            array('address','require','地址不能为空'),
            array('subscribe','require','地址不能为空'),
            
			// array('grade','number','学生成绩只能是数字'),
			// array('user_pwd','6,18','密码不能少于6位，且不能多于18位',3,'length'),
		);


	// protected $_auto =array(
	// 		array('user_name',1),
	// 		array('create_time',time())
	// 	);
	

}

?>