<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 18:53
 */

namespace DEVYZI\Model;


abstract  class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function all()
    {
        $query = "select * from {$this->table}";
        return $this->db->query($query)->fetchAll()[0];
    }

    public function find($id)
    {
        $query = "select * from {$this->table} WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}