<?php
class ProducttourController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->render('navigation','navigation',true);
        $this->render('features','default',true);
    }

}