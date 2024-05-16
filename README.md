# Recruitment Application

This is a simple recruitment application built with PHP, using FastRoute for routing and FluentPDO for database interactions. The application allows users to manage job offers and applications.

## Overview

### Features

- **Job Offers Management**: List, edit, update, and delete job offers.
- **Applications Management**: List, edit, update, and delete applications.
- **MVC Structure**: Clear separation of concerns using a Model-View-Controller architecture.

### Main Components

#### Routing (`public/index.php`)

- **FastRoute**: Handles the routing of HTTP requests to the appropriate controllers.
- **Routes**: Defined for handling job offers and applications.

#### Controllers

- **BaseController**: Provides common functionality for loading views.
- **JobangeboteController**: Manages job offers.
- **BewerbungController**: Manages applications.
- **HomeController**: Loads the homepage view.

#### Models

- **BaseModel**: Base class for models, handling the database query object.
- **JobangeboteModel**: Interacts with the `jobangebote` table for job offers.
- **BewerbungModel**: Interacts with the `bewerbung` table for applications.

#### Views

- **Job Offers Views**:
  - `src/View/jobangebote/index.php`: Displays a list of job offers.
  - `src/View/jobangebote/edit.php`: Form to edit a job offer.
  - `src/View/jobangebote/show.php`: Displays a single job offer.
  - `src/View/jobangebote/update.php`: Form to update a job offer.
- **Applications Views**:
  - `src/View/bewerbung/index.php`: Displays a list of applications.
  - `src/View/bewerbung/edit.php`: Form to edit an application.
  - `src/View/bewerbung/show.php`: Displays a single application.
  - `src/View/bewerbung/update.php`: Form to update an application.
- **Homepage View**:
  - `src/View/home.php`: Displays the homepage with links to job offers and applications.

#### Database Configuration (`src/Config/database.php`)

- Sets up the PDO connection to the MySQL database using FluentPDO for easier querying.

### .htaccess

- **URL Rewriting**: Redirects all requests to `public/index.php` unless the request is for a file or directory within the `public` directory.


# Project Setup Instructions

1. **Create the project structure.**
   - The basic structure should look like this:
     ```
     project-root/
     ├── public/
     │   └── .htaccess
     │   └── index.php
     ├── src/
     │   ├── Config/
     │   │   └── database.php
     │   ├── Controller/
     │   │   ├── BaseController.php
     │   │   ├── BewerbungController.php
     │   │   ├── HomeController.php
     │   │   └── JobangeboteController.php
     │   ├── Model/
     │   │   ├── BaseModel.php
     │   │   ├── BewerbungModel.php
     │   │   └── JobangeboteModel.php
     │   └── View/
     │       ├── bewerbung/
     │       │   ├── edit.php
     │       │   ├── index.php
     │       │   ├── show.php
     │       │   └── update.php
     │       ├── jobangebote/
     │       │   ├── edit.php
     │       │   ├── index.php
     │       │   ├── show.php
     │       │   └── update.php
     │       └── home.php
     ├── vendor/
     ├── .htaccess
     └── composer.json
     ```

2. **Create two .htaccess files:**
   - One in the root to only display the `public` folder:
     ```apache
     # .htaccess in the root
     RewriteEngine On
     RewriteCond %{REQUEST_URI} !^/public/
     RewriteRule ^(.*)$ /public/$1 [L]
     ```
   - Another one in `public` to only load the `index.php`:
     ```apache
     # .htaccess in public
     RewriteEngine On
     RewriteCond %{REQUEST_FILENAME} !-f
     RewriteCond %{REQUEST_FILENAME} !-d
     RewriteRule ^ index.php [QSA,L]
     ```

3. **Set up autoloading with Composer:**
   - Ensure your `composer.json` includes the autoload section:
     ```json
     {
       "autoload": {
         "psr-4": {
           "App\\": "src/"
         }
       },
       "require": {
         "nikic/fast-route": "^1.3",
         "envms/fluentpdo": "^2.2"
       }
     }
     ```
   - Run `composer update` in the terminal to install the dependencies.
   - Run `composer dump-autoload` in the terminal to generate the autoload files.

4. **Set up the `index.php` in the `public` folder:**
   - Import the vendor's autoloader to automatically load all classes from `src`:
     ```php
     <?php
     require_once '../vendor/autoload.php';

     use FastRoute\RouteCollector;

     $dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
         // Define your routes here
     });

     $httpMethod = $_SERVER['REQUEST_METHOD'];
     $uri = $_SERVER['REQUEST_URI'];
     $uri = rawurldecode(parse_url($uri, PHP_URL_PATH));

     $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
     switch ($routeInfo[0]) {
         case FastRoute\Dispatcher::NOT_FOUND:
             http_response_code(404);
             echo '404 Not Found';
             break;
         case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
             http_response_code(405);
             echo '405 Method Not Allowed';
             break;
         case FastRoute\Dispatcher::FOUND:
             $handler = $routeInfo[1];
             $vars = $routeInfo[2];
             if (is_callable($handler)) {
                 call_user_func_array($handler, $vars);
             } else {
                 list($class, $method) = explode('::', $handler);
                 if (class_exists($class)) {
                     if (method_exists($class, $method)) {
                         call_user_func_array([new $class, $method], $vars);
                     } else {
                         echo "Method $method does not exist in class $class<br>";
                     }
                 } else {
                     echo "Class $class does not exist<br>";
                 }
             }
             break;
     }
     ```

5. **Namespace configuration:**
   - The `src` folder is mapped to the `App` namespace in `composer.json`. This means any class in `src/Controller`, `src/Model`, etc., should be under the `App\Controller`, `App\Model`, and respective namespaces.

6. **Importing and using classes:**
   - If you create functions or classes in the various `src` folders, you need to import them into `index.php` by assigning them to a variable. For example:
     ```php
     use App\Controller\JobangeboteController;

     $jobangeboteController = new JobangeboteController();
     $jobangeboteController->index();
     ```
   - This way, you can call methods from your controllers and other classes through these variables.

By following these instructions, you should have a fully functional recruitment application with job offer and application management capabilities.
