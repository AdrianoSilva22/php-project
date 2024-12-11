<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Controller\Pages\Home;

$obRequest = new \App\Http\Response(200, 'adriano');

echo '<pre>';
print_r($obRequest);
echo '</pre>';
exit;
echo Home::getHome();
