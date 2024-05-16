<?php
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\JobangeboteModel;

class JobangeboteController extends BaseController
{
    private $jobangeboteModel;

    public function __construct()
    {
        $query = require __DIR__ . '/../../database.php';
        $this->jobangeboteModel = new JobangeboteModel($query);
    }

    public function index()
    {
        $jobangebote = $this->jobangeboteModel->fetchAll();
        $this->loadView('index', 'jobangebote', ['jobangebote' => $jobangebote]);
    }
}
