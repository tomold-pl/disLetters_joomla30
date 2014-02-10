<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dokument bez tytu</title>
</head>

<body>

<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


// Include the syndicate functions only once

//$hello = Cytaty::getHello( $params );
$layout = $params->get('layout', 'defoult');
require_once dirname(__FILE__) . '/helper.php';
require JModuleHelper::getLayoutPath( 'mod_literki', $layout ) ;
?>

</body>
</html>