<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
$lastRunLog = "$dir/last-run.log";
if (file_exists($lastRunLog)) {
    $lastRun = file_get_contents($lastRunLog);
    if (time() - $lastRun >= 43200) {
         //its been more than a day so run our external file
         require_once("$dir/batch-db.php");

         //update lastrun.log with current time
         file_put_contents($lastRunLog, time());
    }
}
use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';
if (PHP_VERSION_ID < 70000) {
    include_once __DIR__.'/../var/bootstrap.php.cache';
}

$kernel = new AppKernel('prod', false);
if (PHP_VERSION_ID < 70000) {
    $kernel->loadClassCache();
}
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
