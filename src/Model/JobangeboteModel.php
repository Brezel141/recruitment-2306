<?php
namespace App\Model;

use App\Model\BaseModel;

class JobangeboteModel extends BaseModel
{
    public function fetchAll()
    {
        return $this->query->from('jobangebote')->fetchAll();
    }

    public function fetch($id)
    {
        return $this->query->from('jobangebote')->where('id', $id)->fetch();
    }

    public function insert($data)
    {
        return $this->query->insertInto('jobangebote', $data)->execute();
    }

    public function update($id, $data)
    {
        return $this->query->update('jobangebote')->set($data)->where('id', $id)->execute();
    }

    public function delete($id)
    {
        return $this->query->deleteFrom('jobangebote')->where('id', $id)->execute();
    }
}
