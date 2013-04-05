<?php

return array(
    'loader'      => 'frontend/loader',
    'require'     => 'frontend/node_modules/requirejs/require',
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