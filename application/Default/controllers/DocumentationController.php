<?php
class DocumentationController extends Zend_Controller_Action
{

    function indexAction()
    {
        $this->view->headTitle('Vehicle Fits Documentation');
        $url = str_replace('/documentation/index/','',$this->_request->getRequestUri());
        $url = str_replace('..', '', $url);

        $nav = file_get_contents(BASE_PATH.'/application/Default/views/scripts/vf-documentation/v3/toc.htm');
        
        $nav = new Zend_Dom_Query($nav);
        $nav = $nav->query('body');

        foreach($nav as $match) {
            $nav = $match->ownerDocument->saveXML($match);
        }

        $nav = preg_replace('/<a href="/', '<a href="/documentation/index/', $nav);
        $nav = preg_replace('/<\/?body>/', '', $nav);

        $file = BASE_PATH.'/application/Default/views/scripts/vf-documentation/v3//'.$url;
        if(file_exists($file)) {
            $body = file_get_contents($file);
            $body = new Zend_Dom_Query($body);
            $body = $body->query('body');

            foreach($body as $match) {
                $body = $match->ownerDocument->saveXML($match);
            }

            $body = preg_replace('/<img src="/', '<img src="/vf-documentation/'.dirname($url).'/', $body);
        } else {
            $body = '';
        }

        $this->view->body = $body;
        $this->view->nav = $nav;
    }

}