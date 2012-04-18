<?php
require '../vendor/.composer/autoload.php';
require '../config/settings.php';

$redis = new Predis\Client("redis://$redis_slave:6379");
$redis->set('foo', 'bar');
$value = $redis->get('foo');

if ($value == 'bar') {
  echo("Redis OK\n");  
} else {
  header("HTTP/1.1 500 Internal Server Error");
  exit;
}
?>