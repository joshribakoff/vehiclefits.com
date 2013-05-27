<?php
class IndexController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('index','default',true);
    }

}