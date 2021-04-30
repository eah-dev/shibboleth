<?php
namespace TrustCnct\Shibboleth\Controller;

/***
 *
 * This file is part of the "TrustCnct.Shibboleth" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/
use TYPO3\CMS\Extbase\Annotation\Inject;

/**
 * LoginLinkController
 */
class LoginLinkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @Inject
     * @var \TrustCnct\Shibboleth\Service\LoginUrlService
     */
    protected $loginUrlService;

    /**
     * action show
     *
     * @return void
     */
    public function showAction()
    {
        $this->view->assign('loginLinkUrl', $this->loginUrlService->createUrl());
    }
}
