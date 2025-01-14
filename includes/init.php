<?php
// Autoloader
spl_autoload_register(function ($class) {
    // Convert the namespace to a file path
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    
    // The classes are directly in the classes/ folder, so remove the 'Youdemy\Classes\' part
    $path = str_replace('Youdemy\\Classes', '', $path);

    // Construct the full path
    $fullPath = __DIR__ . "/../classes/" . $path;

    // Include the file if it exists
        require_once $fullPath;
  
});


