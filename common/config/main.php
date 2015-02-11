<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['user', 'admin'],
            'itemFile' => '@common/components/rbac/item.php',
            'assignmentFile' => '@common/components/rbac/assignments.php',
            'ruleFile' => '@common/components/rbac/rules.php'
        ],        
    ],   
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\AdminModule',
        ],        
    ],    
];
