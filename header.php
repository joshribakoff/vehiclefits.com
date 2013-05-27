<?php
define('BASE_PATH', dirname(__FILE__));
define( 'VIEW_PATH', BASE_PATH.'/views/' );


set_include_path(
    BASE_PATH.'/library' .
    PATH_SEPARATOR . BASE_PATH.'/application' .
    PATH_SEPARATOR . get_include_path()
);

require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->setFallbackAutoloader(true);

$view = new Zend_View( array(
    'lfiProtectionOn' => false,
));
$view->setScriptPath( VIEW_PATH );

function isGateway()
{
    return false;
//	if( !isset( $_SESSION['gateway'] ) && !isset( $_GET['gateway_bypass'] ) )
//	{
//		header( 'Location:http://vehiclefits.com/gateway.php?go=' . $_SERVER['REQUEST_URI'] );
//	}
}