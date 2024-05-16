<?php
namespace App\Model;

use App\Model\BaseModel;

class BewerbungModel extends BaseModel
{
    // Method to fetch all records from the 'bewerbung' table
    public function fetchAll()
    {
        return $this->query->from('bewerbung')->fetchAll();
    }

    // Method to fetch a single record from the 'bewerbung' table by ID
    public function fetch($id)
    {
        return $this->query->from('bewerbung')->where('id', $id)->fetch();
    }

    // Method to insert a new record into the 'bewerbung' table
    public function insert($data)
    {
        return $this->query->insertInto('bewerbung', $data)->execute();
    }

    // Method to update an existing record in the 'bewerbung' table by ID
    public function update($id, $data)
    {
        return $this->query->update('bewerbung')->set($data)->where('id', $id)->execute();
    }

    // Method to delete a record from the 'bewerbung' table by ID
    public function delete($id)
    {
        return $this->query->deleteFrom('bewerbung')->where('id', $id)->execute();
    }
}
