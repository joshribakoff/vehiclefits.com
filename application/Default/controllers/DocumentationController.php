<?php
class DocumentationController extends Zend_Controller_Action
{
    function indexAction()
    {
        header('Location:/documentation/vfmagento3');
        exit;
    }

    function vfmagento3Action()
    {
        $this->showdocs('vfmagento-3.x');
        $this->render('index');
    }

    function vfmagento2Action()
    {
        $this->showdocs('vfmagento-2.x');
        $this->render('index');
    }

    function vfprestashop1Action()
    {
        $this->showdocs('vfprestashop-1.x');
        $this->render('index');
    }

    function showdocs($version)
    {
        $this->view->headTitle('Vehicle Fits Documentation');
        $url = preg_replace('#\/documentation\/(.*?)\/#','',$this->_request->getRequestUri());
        $url = str_replace('..', '', $url);

        $nav = file_get_contents(BASE_PATH.'/application/Default/views/scripts/vf-documentation/'.$version.'/toc.htm');

        $nav = new Zend_Dom_Query($nav);
        $nav = $nav->query('body');

        foreach($nav as $match) {
            $nav = $match->ownerDocument->saveXML($match);
        }

        switch($version) {
            case 'vfprestashop-1.x':
                $nav = preg_replace('/<a href="/', '<a href="/documentation/vfprestashop1/', $nav);
                $file = BASE_PATH.'/application/Default/views/scripts/vf-documentation/vfprestashop-1.x/'.$url;
            break;
            case 'vfmagento-2.x':
                $nav = preg_replace('/<a href="/', '<a href="/documentation/vfmagento2/', $nav);
                $file = BASE_PATH.'/application/Default/views/scripts/vf-documentation/vfmagento-2.x/'.$url;
            break;
            case 'vfmagento-3.x':
                $nav = preg_replace('/<a href="/', '<a href="/documentation/vfmagento3/', $nav);
                $file = BASE_PATH.'/application/Default/views/scripts/vf-documentation/vfmagento-3.x/'.$url;
            break;
        }

        $nav = preg_replace('/<\/?body>/', '', $nav);

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