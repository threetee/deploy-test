<?php
require '../vendor/.composer/autoload.php';
require '../config/settings.php';

echo("OK\n");

echo("Configured Redis slaves:\n");
print_r($redis_slaves);
?>