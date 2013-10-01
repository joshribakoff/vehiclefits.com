<?php
class IndexController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->view->headTitle('Add a Year/Make/Model Search To Your Website');
        $this->render('navigation','navigation',true);
        $this->render('index','default',true);
    }

}