<?php
    require_once('routes.php');
  
function myAutoload($class_name) {
      require_once ('./classes/'.$class_name.'.php');
}
spl_autoload_register('myAutoload');
?>

