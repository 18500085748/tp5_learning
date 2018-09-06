<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/6/006
 * Time: 14:09
 */
return [
    //生成运行时目录
    '__file__'=>['common.php'],
    //定义index模块的自动生成
    'index' => [
        '__file__'=>['common.php'],
        '__dir__' =>['behaviour', 'controller', 'model', 'view'],
        'controller'=>['Index', 'Test', 'UserType'],
        'model'=>[],
        'view'=>['index/index'],
    ],

];