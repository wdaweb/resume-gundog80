<?php
include_once "../base.php";
echop($_POST);
echop($_SESSION);
foreach($_POST as $k=>$v){
    unset($_SESSION[$k]);
    echo "unset $k" ;
}
?>