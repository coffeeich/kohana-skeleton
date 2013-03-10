<?php

return array(
    'loader'      => 'frontend/loader',
    'require'     => 'frontend/require',
    'production'  => 'frontend/builds',
    'development' => 'frontend/pages',
    'pages'       => array(
        'Welcome' => array(
            'index'=> array(
                'use_build' => true,
                'page'      => 'welcome_index',
                'theme'     => 'default',
            ),
        ),
    ),
);