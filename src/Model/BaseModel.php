<?php

namespace App\Model;

class BaseModel
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }
}
