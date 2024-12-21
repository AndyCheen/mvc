<?php

namespace App\sql;

use PDO;

class Connector
{
    private array $config = [];
    private PDO $pdo;

    public function __construct()
    {
        $this->initConfig();
        $this->dbConnect();
    }

    private function initConfig(): void
    {
        $this->config = require __DIR__ . '/../config/db.php';
    }

    private function getDsn(): string
    {
        if (!$this->config['driver'] || !$this->config['host'] || !$this->config['dbname']) {
            throw new \Exception('Missing DSN data');
        }

        return $this->config['driver'] . ":host=" . $this->config['host'] . ";dbname=" . $this->config['dbname'];
    }
    private function dbConnect(): void
    {
        if (empty($this->config['user']) || empty($this->config['pass'])) {
            throw new \Exception('Empty user or password');
        }

        $this->pdo = new PDO($this->getDsn(), $this->config['user'], $this->config['pass']);
    }

    public function connect(): PDO
    {
        return $this->pdo;
    }
}