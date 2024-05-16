<?php

namespace App\Controller;

class BaseController
{
    // Path to the views directory
    protected $viewsPath = __DIR__ . '/../View/';

    // Method to load a view, can also be in a subdirectory
    public function loadView($viewName, $subDir = '', $data = []): void
    {
        // Check if a subdirectory is specified and adjust the path accordingly
        $path = $this->viewsPath . ($subDir ? '/' . $subDir . '/' : '') . $viewName . '.php';

        // Check if the file exists
        if (file_exists($path)) {
            // Make the data variables available to the view
            extract($data);

            // Include the view file
            require($path);
        } else {
            // Error message if the file is not found
            echo "The view $viewName could not be found.";
        }
    }
}
