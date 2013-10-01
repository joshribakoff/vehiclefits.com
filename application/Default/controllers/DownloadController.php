<?php
class DownloadController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->view->headTitle('Download Vehicle Fits');
        $this->render('navigation','navigation',true);
        $this->render('download','default',true);
    }

}