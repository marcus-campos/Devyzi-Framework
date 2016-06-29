<?php
/**
 * Created.
 * Date: 28/06/16
 * Time: 18:53
 */

namespace DEVYZI\Model;


use Mockery\CountValidator\Exception;

abstract  class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        try
        {
            $this->db = $db;
        }
        catch (\PDOException $ex)
        {
            echo "Erro: ".$ex;
        }
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    //TODO: Select multiple values
    public function select($columns, $where)
    {
        $result = null;

        $query = "SELECT {$columns} FROM {$this->table} WHERE {$where}";
        $result = $this->db->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}