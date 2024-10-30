<?php
spl_autoload_register(function ($class_name) {
    // Define the base directory for your classes
    $base_dir = __DIR__ . '/../Controllers/';

    // Replace backslashes with directory separators (in case you're on Windows)
    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

    // Construct the full path to the class file
    $file = $base_dir . $class_name . '.class.php';

    // Check if the file exists and include it
    if (file_exists($file)) {
        require $file;
    }
});