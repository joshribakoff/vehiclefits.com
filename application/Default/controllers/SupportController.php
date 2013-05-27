<?php
class SupportController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('support','default',true);
    }

}