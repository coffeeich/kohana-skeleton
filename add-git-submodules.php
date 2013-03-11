<?php

$submodule = array(
    array(
        'path' => 'system',
        'url' => 'https://github.com/kohana/core.git',
    ),
    array(
        'path' => 'modules/auth',
        'url' => 'https://github.com/kohana/auth.git',
    ),
    array(
        'path' => 'modules/cache',
        'url' => 'https://github.com/kohana/cache.git',
    ),
    array(
        'path' => 'modules/codebench',
        'url' => 'https://github.com/kohana/codebench.git',
    ),
    array(
        'path' => 'modules/database',
        'url' => 'https://github.com/kohana/database.git',
    ),
    array(
        'path' => 'modules/image',
        'url' => 'https://github.com/kohana/image.git',
    ),
    array(
        'path' => 'modules/minion',
        'url' => 'https://github.com/kohana/minion.git',
    ),
    array(
        'path' => 'modules/orm',
        'url' => 'https://github.com/kohana/orm.git',
    ),
    array(
        'path' => 'modules/unittest',
        'url' => 'https://github.com/kohana/unittest.git',
    ),
    array(
        'path' => 'modules/userguide',
        'url' => 'https://github.com/kohana/userguide.git',
    ),
    array(
        'path' => 'modules/bootstrap',
        'url' => 'https://github.com/ich/kohana-bootstrap.git',
    ),
    array(
        'path' => 'modules/client',
        'url' => 'https://github.com/ich/kohana-client-controller.git',
    ),
    array(
        'path' => 'modules/twig',
        'url' => 'https://github.com/ich/kohana-twig.git',
    ),
);

foreach ($submodule as $module) {
    $command = "git submodule add {$module['url']} {$module['path']}";

    echo "{$command}\n" . `{$command}`;
}

$command = "git submodule update --init --recursive";

echo "{$command}\n" . `{$command}`;

$command = 'rm ' . __FILE__;

echo "{$command}\n" . `{$command}`;