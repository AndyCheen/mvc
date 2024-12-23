<?php

namespace App\sql;

class Where
{
    private string $field;
    private string $operator;
    private string $value;

    public function __construct(string $field, string $operator, string $value)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function getWhere()
    {
        return "WHERE " . $this->field . " " . $this->operator . " " . $this->value;
    }
}