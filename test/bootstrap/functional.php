<?php

// guess current application
if (!isset($app))
{
  $traces = debug_backtrace();
  $caller = $traces[0];

  $dirPieces = explode(DIRECTORY_SEPARATOR, dirname($caller['file']));
  $app = array_pop($dirPieces);
}

if (!isset($env))
{
  $env = 'test';
}

// chdir to the symfony(OpenPNE) project directory
chdir(dirname(__FILE__).'/../../../..');

require_once 'config/ProjectConfiguration.class.php';
$configuration = ProjectConfiguration::getApplicationConfiguration($app, $env, isset($debug) ? $debug : true);
include dirname(__FILE__).'/database.php';
sfContext::createInstance($configuration);

// remove all cache
sfToolkit::clearDirectory(sfConfig::get('sf_app_cache_dir'));
