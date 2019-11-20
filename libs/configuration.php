<?php
// configuration
    require 'libs/Config.php';
    $config=Config::singleton();
    $config->set('controllerFolder', 'controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    $config->set('dbhost', 'atlanticmarket-mysqldbserver.mysql.database.azure.com');
    $config->set('dbname', 'mysqldatabase33903');
    $config->set('dbuser', 'mysqldbuser@atlanticmarket-mysqldbserver');
    $config->set('dbpass', '25351211ppac!');
    
    
?>
