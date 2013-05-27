<?php
class DocumentationController extends Zend_Controller_Action
{

    function preDispatch()
    {
        $this->render('navigation','navigation',true);
    }

    function indexAction()
    {
        $url = str_replace('/documentation/index/','',$this->_request->getRequestUri());
        var_dump(file_get_contents(BASE_PATH.'/html/vf-documentation/toc.htm'));
        var_dump(file_get_contents(BASE_PATH.'/html/vf-documentation/'.$url));
        $this->_helper->viewRenderer->setNoRender(true);
    }

}