<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace HighpointSetup\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class InstitutionController extends AbstractActionController {
	public function nameAction() {
		$message = $this->params ()->fromQuery ( 'message', 'foo' );
		return new ViewModel ( array (
				'message' => $message 
		) );
	}
}
