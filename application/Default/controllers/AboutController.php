<?php
class AboutController extends Zend_Controller_Action
{

    function preDispatch()
    {
        $this->render('navigation','navigation',true);
    }

    function searchAction()
    {
        $this->render('search','default');
    }
    function dataAction()
    {
        
        $this->render('data','default');
    }
    function adminAction()
    {
        
        $this->render('admin','default');
    }
    function logosAction()
    {
        
        $this->render('logos','default');
    }
    function searchResultsAction()
    {
        
        $this->render('search-results','default');
    }
    function fitmentnotesAction()
    {
        
        $this->render('fitment-notes','default');
    }
    function facetedAction()
    {

        $this->render('faceted','default');
    }
    function universalAction()
    {
        
        $this->render('universal','default');
    }
    function checkoutAction()
    {
        
        $this->render('checkout','default');
    }
    function bundleAction()
    {
        
        $this->render('bundle','default');
    }
    function seoAction()
    {
        
        $this->render('seo','default');
    }
    function snippetsAction()
    {
        
        $this->render('snippets','default');
    }
    function paintAction()
    {
        
        $this->render('paint','default');
    }
    function wheelAction()
    {
        
        $this->render('wheel','default');
    }
    function wheelAdapterAction()
    {
        
        $this->render('wheel-adapter','default');
    }
    function tireAction()
    {
        
        $this->render('tires','default');
    }

}