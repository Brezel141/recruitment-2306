<?php
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\JobangeboteModel;

class JobangeboteController extends BaseController
{
    private $jobangeboteModel;

    // Constructor to initialize the JobangeboteModel
    public function __construct()
    {
        // Require the database configuration and get the query object
        $query = require __DIR__ . '/../Config/database.php';
        // Initialize the JobangeboteModel with the query object
        $this->jobangeboteModel = new JobangeboteModel($query);
    }

    // Method to display the index view with all job offers
    public function index()
    {
        // Fetch all job offers
        $jobangebote = $this->jobangeboteModel->fetchAll();
        // Load the index view and pass the job offers data
        $this->loadView('index', 'jobangebote', ['jobangebote' => $jobangebote]);
    }

    // Method to display the edit view for a specific job offer
    public function edit($id)
    {
        // Fetch the job offer by ID
        $jobangebot = $this->jobangeboteModel->fetch($id);
        // Load the edit view and pass the job offer data
        $this->loadView('edit', 'jobangebote', ['jobangebot' => $jobangebot]);
    }

    // Method to display the show view for a specific job offer
    public function show($id)
    {
        // Fetch the job offer by ID
        $jobangebot = $this->jobangeboteModel->fetch($id);
        // Load the show view and pass the job offer data
        $this->loadView('show', 'jobangebote', ['jobangebot' => $jobangebot]);
    }

    // Method to update a specific job offer
    public function update($id)
    {
        // Get the data from the POST request
        $data = [
            'titel' => $_POST['titel']
        ];
        // Update the job offer with the new data
        $this->jobangeboteModel->update($id, $data);
        // Redirect to the job offers index page
        header('Location: /jobangebote');
        exit;
    }

    // Method to delete a specific job offer
    public function delete($id)
    {
        // Delete the job offer by ID
        $this->jobangeboteModel->delete($id);
        // Redirect to the job offers index page
        header('Location: /jobangebote');
        exit;
    }
    //--------------------------------------------------------------
    public function create()
{
    // We're creating a new job offer
    $jobangebot = ['id' => '', 'titel' => ''];

    // Load the update view and pass it the job offer
    require_once '../View/jobangebote/update.php';
    //--------------------------------------------------------------
}
}
