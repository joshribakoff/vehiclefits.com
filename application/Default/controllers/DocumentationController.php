<?php
class DocumentationController extends Zend_Controller_Action
{

    function indexAction()
    {
        $url = str_replace('/documentation/index/','',$this->_request->getRequestUri());

        $nav = file_get_contents(BASE_PATH.'/html/vf-documentation/toc.htm');
        
        $nav = new Zend_Dom_Query($nav);
        $nav = $nav->query('body');

        foreach($nav as $match) {
            $nav = $match->ownerDocument->saveXML($match);
        }

        $nav = preg_replace('/<a href="/', '<a href="/documentation/index/', $nav);

        $file = BASE_PATH.'/html/vf-documentation/'.$url;
        if(file_exists($file)) {
            $body = file_get_contents($file);
            $body = new Zend_Dom_Query($body);
            $body = $body->query('body');

            foreach($body as $match) {
                $body = $match->ownerDocument->saveXML($match);
            }
        } else {
            $body = $file;
        }
        $this->view->body = $body;
        $this->view->nav = $nav;
    }

}