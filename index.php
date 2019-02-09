<?php
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   session_start();

   define("ROOT", dirname( __FILE__));
    require ROOT . "/components/Router.php";
    require ROOT . "/components/Db.php";

    $rout = new Router();
    $rout->run();
?>