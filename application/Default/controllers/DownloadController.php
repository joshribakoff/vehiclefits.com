<?php
class DownloadController extends Zend_Controller_Action
{

    function indexAction()
    {
        header('Location:/download/magento');
        exit;
    }

    function magentoAction()
    {
        $this->view->headTitle('Download Vehicle Fits for Magento');
        $this->render('navigation','navigation',true);
        $this->render('download-magento','default',true);
    }

    function prestashopAction()
    {
        $this->view->headTitle('Download Vehicle Fits for Prestashop');
        $this->render('navigation','navigation',true);
        $this->render('download-prestashop','default',true);
    }

}