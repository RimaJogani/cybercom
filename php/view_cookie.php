<?php

echo $_COOKIE['user'];

//destoroy cookiees...

setcookie('user','',time()-(120),'/');

?>