<?php 

$theStyle    = $HTTP_GET_VARS["style"]; /* querystring */ 

setcookie("style", $theStyle, time()+36000, "/", ""); 

header("Location: $HTTP_REFERER"); 

exit; 

?>