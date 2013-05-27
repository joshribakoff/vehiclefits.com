<?php
class ChangelogController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('changelog','default',true);
    }

}