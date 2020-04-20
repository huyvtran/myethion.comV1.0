<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];
if ($countrycode=='NG')
    header( 'Location: http://ng.myethion.com' ) ;
  else if ($countrycode=='GH')
    header( 'Location: http://ng.myethion.com' ) ;
else 
    header( 'Location: http://myethion.com/en-US' ) ;

?>