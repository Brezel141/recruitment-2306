<?php
namespace App\Controller;

use App\Controller\BaseController;
use App\Model\BewerbungModel;

class BewerbungController extends BaseController
{
    private $bewerbungModel;

    public function __construct()
    {
        $query = require __DIR__ . '/../../database.php';
        $this->bewerbungModel = new BewerbungModel($query);
    }

    public function index()
    {
        $bewerbungen = $this->bewerbungModel->fetchAll();
        $this->loadView('index', 'bewerbung', ['bewerbungen' => $bewerbungen]);
    }
}
