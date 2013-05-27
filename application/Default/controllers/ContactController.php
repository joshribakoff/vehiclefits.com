<?php
class ContactController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('contact','default',true);
    }

}