<?php
use yii2mod\rbac\assets\RbacAsset;

RbacAsset::register($this);
$this->params['sidebar'] = [
    [
        'label' => 'Assignments',
        'url' => ['/rbac/assignment/index'],
    ],
    [
        'label' => 'Roles',
        'url' => ['/rbac/role/index'],
    ],
    [
        'label' => 'Permissions',
        'url' => ['/rbac/permission/index'],
    ],
    [
        'label' => 'Routes',
        'url' => ['/rbac/route/index'],
    ],
    [
        'label' => 'Rules',
        'url' => ['/rbac/rule/index'],
    ]
];
