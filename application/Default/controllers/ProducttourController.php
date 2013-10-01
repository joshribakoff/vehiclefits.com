<?php
class ProducttourController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->view->headTitle('Tour Automotive Software Features');
        $this->render('navigation','navigation',true);
        $this->render('features','default',true);
    }

}