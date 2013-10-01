<?php
class DemoController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->view->headTitle('Demo Sites');
        $this->render('navigation','navigation',true);
        $this->render('demo','default',true);
    }

}