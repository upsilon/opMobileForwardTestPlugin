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
 * forwardTest actions.
 *
 * @package    opMobileForwardTestPlugin
 * @subpackage forwardTest
 * @author     Kimura Youichi <kim.upsilon@bucyou.net>
 */
class forwardTestActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

  public function executeForward(sfWebRequest $request)
  {
    $this->forward('forwardTest', 'show');
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->keyword = $request['keyword'];
  }
}
