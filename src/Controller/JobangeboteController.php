<?php

namespace App\Controller;

use App\Controller\BaseController;

class JobangeboteController extends BaseController
{
    public function index()
    {
        parent::loadView('index', 'jobangebote');
    }
}