<?php
namespace App\Model;

use App\Model\BaseModel;

class BewerbungModel extends BaseModel
{
    public function fetchAll()
    {
        return $this->query->from('bewerbung')->fetchAll();
    }

    public function fetch($id)
    {
        return $this->query->from('bewerbung')->where('id', $id)->fetch();
    }

    public function insert($data)
    {
        return $this->query->insertInto('bewerbung', $data)->execute();
    }

    public function update($id, $data)
    {
        return $this->query->update('bewerbung')->set($data)->where('id', $id)->execute();
    }

    public function delete($id)
    {
        return $this->query->deleteFrom('bewerbung')->where('id', $id)->execute();
    }
}
