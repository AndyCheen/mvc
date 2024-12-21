<?php

namespace App\sql;

use App\sql\Connector;

class Insert
{
    private string $tabelName;
    private array $fields = [];
    private array $values = [];

    public function __construct()
    {
        $connect = new Connector();
    }

    public function setTableName(string $tableName): void
    {
        $this->tabelName = $tableName;
    }

    public function buildSql(): string
    {
        return 'INSERT INTO ' . $this->tabelName . ' (' . implode(', ', $this->fields) . ') VALUES ' . $this->getValues();
    }

    private function checkFloors(): bool
    {
        return is_array($this->values[0]) ? true : false;
    }

    private function getValues(): string
    {
        if (empty($this->values)) {
            throw new \Exception('Invalide value');
        }

        if ($this->checkFloors()) {
            foreach ($this->values as $value) {
                $result[] = '(' . implode(', ', $value) . ')';
            }
        } else {
            $result[] = '(' . implode(', ', $this->values) . ')';
        }
        return implode(', ', $result);
    }

    public function setData(array $data): void
    {
        if (empty($data)) {
            throw new \Exception('Empty data');
        }

        //Перевірка на багатомірність масива
        if (is_array(reset($data))) {
            //Зберігаю клбючі та довжину першого елемента масива для порівняння з іншими
            $etalonKeys = array_keys($data[0]);
            $etalonLength = count($data[0]);

            foreach ($data as $item) {
                //Сортую кожен елемент масива по ключам для коректної вставки даних в запит у випадку коли ключі передані у різному порядку
                ksort($item);
                $curentKeys = array_keys($item);

                // Перевіряю що ключі однакові і їх кількість однакова
                if (count(array_diff($etalonKeys, $curentKeys)) > 0) {
                    throw new \Exception('Entities have different fields');
                }
                if (count($item) !== $etalonLength) {
                    throw new \Exception('Entities have different amount of fields');
                }
                // Якщо все добре то всі значення масивами пушу в $this->values
                array_push($this->values, array_values($item));
            }

            // Відсортовую ключі першого елемента щоб вони були в тому ж порядку що і значення, і записую в $this->fields
            sort($etalonKeys);
            $this->fields = $etalonKeys;
        } else {
            $this->fields = array_keys($data);
            $this->values = array_values($data);
        }
    }
}