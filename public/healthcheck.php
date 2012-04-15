<?php
require '../vendor/.composer/autoload.php';
require '../config/settings.php';

echo("OK");

echo("Configured Redis slaves:");
print_r($redis_slaves);
?>