<?php
function myAutoloader($className)
{
    $classPath = __DIR__ . '/Controllers/';
    $filePath = $classPath . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
}
spl_autoload_register("myAutoloader");
