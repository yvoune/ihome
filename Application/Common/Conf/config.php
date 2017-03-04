<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'        => 'Home',
    'DEFAULT_GROUP'         => 'Home',  // 默认分组
    "APP_GROUP_MODE" => "1",
    'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'127.0.0.1',// 服务器地址
	'DB_NAME'=>'ihome',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'',// 密码
	'DB_PORT'=>'3306',// 端口
	'DB_PREFIX'=>'',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
	'URL_MODEL' => '2',// 2代表PATHINFO模式，这是系统的默认URL模式，提供了最好的SEO支持，系统内部已经做了环境的兼容处理，所以能够支持大多数的主机环境。
	// 对应上面的URL模式，PATHINFO模式下面的URL访问地址是：http://localhost/index.php/home/index/hello/name/thinkphp/
	// PATHINFO地址的前三个参数分别表示模块/控制器/操作。
	// PATHINFO模式下面，也可以用普通模式的参数方式传入参数，例如：http://localhost/index.php/home/index/hello?name=thinkphp
	// PATHINFO模式下面，URL参数分隔符是可定制的，例如，通过下面的配置：'URL_PATHINFO_DEPR'=>'-',// 更改PATHINFO参数分隔符
);