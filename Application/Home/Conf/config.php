<?php
return array(
	//'配置项'=>'配置值'
		//数据库配置1
		'DB_CONFIG1' => array(
				'db_type'  => 'mysql',
				'db_user'  => 'root',
				'db_pwd'   => null,
				'db_host'  => 'localhost',
				//'db_port'  => '3306',//端口号不一致
				'db_name'  => 'thinkphp',
				//'DB_PREFIX' => 'think_', // 数据库表前缀 
				'db_charset'=> 'utf8',
		),
		//数据库配置2
		'DB_CONFIG2' => 'mysql://root:""@localhost:3306/thinkphp#utf8'
		
);