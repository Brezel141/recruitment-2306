<?php

namespace App\Controller;

class HomeController extends BaseController
{
    // Method to display the home view
    public function index(): void
    {
        // Load the 'home' view using the parent method from BaseController
        parent::loadView('home');

        // Display a message indicating the controller being used
        echo 'I am the HomeController';
    }
}
