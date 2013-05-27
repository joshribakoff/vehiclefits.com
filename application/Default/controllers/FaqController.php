<?php
class FaqController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('faq','default',true);
    }

}