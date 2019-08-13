<?php
require_once(dirname(__FILE__).'/../../public/boot.php');

class BackupGuard_BackupGuardFree_Adminhtml_BackupguardfreeController extends Mage_Adminhtml_Controller_Action
{
    protected function _initAction()
    {
        $this->loadLayout()->_setActiveMenu('backupguardfree/backups');
        return $this;
    }

    public function backupsAction()
    {
        define('SG_PUBLIC_AJAX_URL', Mage::helper("adminhtml")->getUrl("adminhtml/backupguardfree/ajax"));

        $this->_initAction();
        $this->renderLayout();
    }

    public function settingsAction()
    {
        $this->_initAction();
        $this->renderLayout();
    }

    public function supportAction()
    {
        $this->_initAction();
        $this->renderLayout();
    }

    public function whyupgradeAction()
    {
        $this->_initAction();
        $this->renderLayout();
    }

    public function ajaxAction()
    {
        $params = $this->getRequest()->getParams();
        include(SG_PUBLIC_AJAX_PATH.$params['action'].'.php');
    }
}
