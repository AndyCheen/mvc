<?php

namespace App\sql;

use App\sql\Connector;
use PDO;

class Delete
{
    private string $tabelName;

    public function __construct()
    {
        $this->connect = (new Connector())->connect();
    }

    public function setTableName(string $tableName): void
    {
        $this->tabelName = $tableName;
    }

    public function buildSql(): string
    {
//        var_dump('INSERT INTO ' . $this->tabelName . ' (' . implode(', ', $this->fields) . ') VALUES ' . $this->getValues());die ;
        return 'INSERT INTO ' . $this->tabelName . ' (' . implode(', ', $this->fields) . ') VALUES ' . $this->getValues();
    }





    private function stringValuesToString($data)
    {
        $values = array_values($data);

        //Якщо дані були передані в форматі тексту то поміщаємо значення в кавички
        $newArrayValues = [];
        foreach ($values as $value) {
            if (true) {
                $newValue = "'" . $value . "'";
            } else {
                $newValue = $value;
            }
            $newArrayValues[] = $newValue;
        }
        return $newArrayValues;
    }

    public function execute()
    {
        var_dump($this->buildSql());
        $this->connect->query($this->buildSql());
    }
}