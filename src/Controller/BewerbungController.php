<?php
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\BewerbungModel;

class BewerbungController extends BaseController
{
    private $bewerbungModel;

    // Constructor to initialize the BewerbungModel
    public function __construct()
    {
        // Require the database configuration and get the query object
        $query = require __DIR__ . '/../Config/database.php';
        // Initialize the BewerbungModel with the query object
        $this->bewerbungModel = new BewerbungModel($query);
    }

    // Method to display the index view with all applications
    public function index()
    {
        // Fetch all applications
        $bewerbungen = $this->bewerbungModel->fetchAll();
        // Load the index view and pass the applications data
        $this->loadView('index', 'bewerbung', ['bewerbungen' => $bewerbungen]);
    }

    // Method to display the edit view for a specific application
    public function edit($id)
    {
        // Fetch the application by ID
        $bewerbung = $this->bewerbungModel->fetch($id);
        // Load the edit view and pass the application data
        $this->loadView('edit', 'bewerbung', ['bewerbung' => $bewerbung]);
    }

    // Method to display the show view for a specific application
    public function show($id)
    {
        // Fetch the application by ID
        $bewerbung = $this->bewerbungModel->fetch($id);
        // Load the show view and pass the application data
        $this->loadView('show', 'bewerbung', ['bewerbung' => $bewerbung]);
    }

    // Method to update a specific application
    public function update($id)
    {
        // Get the data from the POST request
        $data = [
            'titel' => $_POST['titel']
        ];
        // Update the application with the new data
        $this->bewerbungModel->update($id, $data);
        // Redirect to the application index page
        header('Location: /bewerbung');
        exit;
    }

    // Method to delete a specific application
    public function delete($id)
    {
        // Delete the application by ID
        $this->bewerbungModel->delete($id);
        // Redirect to the application index page
        header('Location: /bewerbung');
        exit;
    }
}
