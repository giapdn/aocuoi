<?php
if (!function_exists('require_file')) {
     function require_file($pathFolder)
     {
          $files = array_diff(scandir($pathFolder), [".", ".."]);
          foreach ($files as $fileName) {
               require_once $pathFolder . $fileName;
          }
     }
}

if (!function_exists('debug')) {
     function debug($var)
     {
          echo "<pre>";
          print_r($var);
          die;
     }
}

if (!function_exists('Error_404')) {
     function Error_404()
     {
          echo 'Error_404';
          die;
     }
}

if (!function_exists('showViewClient')) {
     function showViewClient($view, $data = null)
     {
          if (!empty($data)) {
               extract($data);
          }
          require_once './Client/Views/master.php';
     }
}
