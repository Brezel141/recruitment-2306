<?php

namespace App\Model;

class BaseModel
{
    protected $query;  // Property to hold the query object

    // Constructor to initialize the BaseModel with a query object
    public function __construct($query)
    {
        $this->query = $query;  // Assign the query object to the class property
    }
}
