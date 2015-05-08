<?php
return array(
		//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址 127.0.0.1,效率较高
	'DB_NAME'   => '99m', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'tp_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	
	'TMPL_PARSE_STRING' => array(
			'__STATIC__' => __ROOT__.'/Public/Static',	
			'__CSS__' => __ROOT__.'/Public/Css',
			'__IMG__' => __ROOT__.'/Public/Img',
			'__JS__' => __ROOT__.'/Public/Js',
			'__ASSETS__'=>__ROOT__.'/Public/Static/assets',
			'__WORTHY__'=>__ROOT__.'/Public/Static/worthy',

			'__UPLOADS__'=>__ROOT__.'/Uploads',
	),
);