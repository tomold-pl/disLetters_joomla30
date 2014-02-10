<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>


<html>
<!--    <link href="modules/mod_literki/css/css.css" rel="stylesheet" type="text/css" />-->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">-->
</script>


<body>
<?php 

switch ($params->get('jquerylibrary')){
case 0:
     echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>';
    break;
case 1:
    
    break;
}


?>
    <div style ="float:left;">
<?php


echo '<script>';
echo 'var jq = $.noConflict();';
echo 'jq(document).ready(function(){';

echo 'jq(".marek").mouseenter(function(){';
echo '    jq(this).fadeTo('.$params->get('AnimationSpeed').', '.$params->get('FinalTransparent').');';
echo '});';

echo '});';
echo '</script>';












$wybor = $params->get('mylistvalue');

switch ($wybor) {
    
case 0:
        
echo '<style type="text/css">';
include 'modules/mod_literki/css/css1.css';
echo '</style>';
        break;
case 1:
        
echo '<style type="text/css">';
include 'modules/mod_literki/css/css2.css';
echo '</style>';
        break;
case 2:
        
echo '<style type="text/css">';
include 'modules/mod_literki/css/css3.css';
echo '</style>';
        break;
    
case 3:
    
    echo '<style type="text/css">';
    echo '.marek{
        color:'.$params->get('FontColor').'; 
        float:left;
        font-family:'.$params->get('FontFamily').';
        font-size:'.$params->get('FontSize').';
        line-height:'.$params->get('FontSize').';  
            height:auto;
}
.marek2{

float: left;
font-family:'.$params->get('FontFamily').';
font-size:'.$params->get('FontSize').';
line-height:'.$params->get('FontSize').'; 
    
}


'
     ;

    echo '</style>';
    
    break;
    
    
}

$napis01 = new Napis;
$napis01->setString($params->get('limytextarea'));

$napis01->rozbicieStringa();


?>



    </div>
    
    
</body>
</html>