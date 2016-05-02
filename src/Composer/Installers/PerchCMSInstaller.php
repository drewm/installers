<?php
namespace Composer\Installers;

class PerchCMSInstaller extends BaseInstaller
{
    protected $locations = array(
        'app'    => 'addons/apps/{$name}/',
        'plugin' => 'addons/plugins/{$name}/',
        'core'   => '/',
    );
}
