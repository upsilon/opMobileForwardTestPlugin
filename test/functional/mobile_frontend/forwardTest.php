<?php

/**
 * opMobileFOrwardTestPlugin
 *
 * This source file is subject to the Apache License version 2.0
 * that is bundled with this package in the file LICENSE.
 *
 * @copyright   Kimura Youichi <kim.upsilon@bucyou.net>
 * @license     Apache License 2.0
 */

/**
 * mobile_frontend での sfAction::foward 動作テスト
 *
 * foward 時にリクエストのパラメータが二重エスケープされなければ成功
 *
 * @package    opMobileForwardTestPlugin
 * @subpackage test
 * @author     Kimura Youichi <kim.upsilon@bucyou.net>
 */

$env = 'prod'; // sfMobileIOFilter を強制的に動作させる
include dirname(__FILE__).'/../../bootstrap/functional.php';

$browser = new opTestFunctional(new sfBrowser(), new lime_test(2, new lime_output_color()));
$browser->setMobile();

$browser
  ->get('/forwardTest/show', array('keyword' => mb_convert_encoding('aaaあああｱｱｱ', 'SJIS-win', 'UTF-8')))
  ->with('response')->matches(mb_convert_encoding('#<span id="request">aaaあああｱｱｱ</span>#', 'SJIS-win', 'UTF-8'))

  ->get('/forwardTest/forward', array('keyword' => mb_convert_encoding('aaaあああｱｱｱ', 'SJIS-win', 'UTF-8')))
  ->with('response')->matches(mb_convert_encoding('#<span id="request">aaaあああｱｱｱ</span>#', 'SJIS-win', 'UTF-8'))
;
