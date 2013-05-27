<?php
class ExamplesitesController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('example-sites','default',true);
    }

}