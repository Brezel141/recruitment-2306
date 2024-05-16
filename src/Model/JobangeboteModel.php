<?php
namespace App\Model;

use App\Model\BaseModel;

class JobangeboteModel extends BaseModel
{
    // Method to fetch all records from the 'jobangebote' table
    public function fetchAll()
    {
        return $this->query->from('jobangebote')->fetchAll();
    }

    // Method to fetch a single record from the 'jobangebote' table by ID
    public function fetch($id)
    {
        return $this->query->from('jobangebote')->where('id', $id)->fetch();
    }

    // Method to insert a new record into the 'jobangebote' table
    public function insert($data)
    {
        return $this->query->insertInto('jobangebote', $data)->execute();
    }

    // Method to update an existing record in the 'jobangebote' table by ID
    public function update($id, $data)
    {
        return $this->query->update('jobangebote')->set($data)->where('id', $id)->execute();
    }

    // Method to delete a record from the 'jobangebote' table by ID
    public function delete($id)
    {
        return $this->query->deleteFrom('jobangebote')->where('id', $id)->execute();
    }
}
