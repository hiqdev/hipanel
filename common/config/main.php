<?php
/**
 * @link    http://hiqdev.com/hipanel
 * @license http://hiqdev.com/hipanel/license
 * @copyright Copyright (c) 2015 HiQDev
 */

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'hipanel\base\AuthManager',
        ],
    /// IMPORTANT: hiresource and mail configured at common/config/main-local.php
    ],
    'aliases' => [
        '@hipanel' => dirname(dirname(__DIR__)),
    ],
];
