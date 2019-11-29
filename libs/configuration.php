<?php
// configuration
    require 'libs/Config.php';
    $config=Config::singleton();
    $config->set('controllerFolder', 'controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    $config->set('dbhost', 'tcp:atlanticmarketadventures.database.windows.net,1433');
    $config->set('dbname', 'AtlanticMarketAventure');
    $config->set('dbuser', 'emilioaraya');
    $config->set('dbpass', '25351211ppac!');
    
    
?>
