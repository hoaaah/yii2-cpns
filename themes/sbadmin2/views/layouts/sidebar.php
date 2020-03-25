<?php

use hoaaah\sbadmin2\widgets\Menu;

function akses($menu){
    return true;
}

echo Menu::widget([
    'options' => [
        'ulClass' => "navbar-nav bg-gradient-primary sidebar sidebar-dark accordion",
        'ulId' => "accordionSidebar"
    ], //  optional
    'items' => [
        ['label' => 'Pengaturan', 'icon' => 'fas fa-circle','url' => '#', 'visible' => akses(102) || akses(103) || akses(104),'items'  =>
            [
                ['label' => 'User Management', 'icon' => 'fas fa-circle', 'url' => ['/user/index'], 'visible' => akses(102)],     
            ],
        ],                    
    ]
]);