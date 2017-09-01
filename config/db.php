<?php
$dbconfig=[
    'XUEXIQ' =>'xxq',
    'ADMIN'   =>'ad',
];
$charsets['media']="utf8";
define('DBPREFIX','SYSTEM_DB_');
foreach($dbconfig as $k=>$v)
{
    $charset=$charsets[$v]?"charset=".$charsets[$v]:"";
    $db['db'.$v]=[
        'class' => 'yii\db\Connection',
        // 配置主服务器
        'dsn' => "mysql:host={$SYSTEMCONFIG[DBPREFIX."HOST_M_{$k}"]};port={$SYSTEMCONFIG[DBPREFIX."PORT_M_{$k}"]};dbname={$SYSTEMCONFIG[DBPREFIX."NAME_M_{$k}"]};$charset",
        'username' => $SYSTEMCONFIG[DBPREFIX."USER_M_{$k}"],
        'password' => $SYSTEMCONFIG[DBPREFIX."PASS_M_{$k}"],
        // 配置从服务器
        'slaveConfig' => [
            'username' =>  $SYSTEMCONFIG[DBPREFIX."USER_S_{$k}"],
            'password' =>  $SYSTEMCONFIG[DBPREFIX."PASS_S_{$k}"],
            'attributes' => [
                // use a smaller connection timeout
                PDO::ATTR_TIMEOUT => 10,
            ],
        ],
        // 配置从服务器组
        'slaves' => [
            ['dsn' => "mysql:host={$SYSTEMCONFIG[DBPREFIX."HOST_S_{$k}"]};port={$SYSTEMCONFIG[DBPREFIX."PORT_S_{$k}"]};dbname={$SYSTEMCONFIG[DBPREFIX."NAME_S_{$k}"]};$charset"],
        ],
    ];

}
return $db;
