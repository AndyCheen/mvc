<?php

namespace App\core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\controllers\\';
    private string $methodName = '';
    private string $controllerName = '';
    private array $request_uri = [];
    private array $config = [];
    private bool $admin = false;



    public function __construct($config)
    {
        $this->config = $config;
        $this->setRequestUri();
        $this->setMode();
        $this->setControllerName();
        $this->setMathodName();

    }
    public function run(): void
    {
        $this->validate();
        $namespace = $this->getNamespace();

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'NotFound';
        }

        $controller = new $namespace();
        $controller->action($this->getMethodName());
    }

    private function setRequestUri(): void
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $this->request_uri = explode("/", $_SERVER['REQUEST_URI']);
        }
    }

    private function setControllerName(): void
    {
        $elementNum = 2;
        if ($this->isAdmin()) {
            $elementNum = 3;
        }
        if (isset($this->request_uri[$elementNum]) && !empty($this->request_uri[$elementNum])) {
            $this->controllerName = $this->request_uri[$elementNum];
        } else {
            $this->controllerName = 'Main';
        }

    }
    public function getControllerName(): string
    {
        return $this->controllerName;
    }
    private function setMathodName(): void
    {
        $elementNum = 3;
        if ($this->isAdmin()) {
            $elementNum = 4;
        }
        if (isset($this->request_uri[$elementNum])) {
            $this->methodName = lcfirst($this->request_uri[$elementNum]);
        } else {
            $this->methodName = 'view';
        }
    }

    public function getMethodName(): string
    {
        return lcfirst($this->methodName);
    }

    public function getNamespace(): string
    {
        if ($this->isAdmin()) {
            return self::CONTROLLER_NAMESPACE . 'admin\\' . ucfirst($this->getControllerName());
        } else {
            return self::CONTROLLER_NAMESPACE . 'public\\' . ucfirst($this->getControllerName());
        }
    }

    private function validate(): void
    {
        $actionPath = ucfirst($this->getControllerName()) . '/' . lcfirst($this->getMethodName());

        if (!isset($this->config[$actionPath])) {
            $this->controllerName = 'NotFound';
            $this->methodName = 'view';
        } else {
            $configArray = explode("/", $this->config[$actionPath]);
            $this->controllerName = ucfirst($configArray[0]);
            $this->methodName = lcfirst($configArray[1]);
        }
    }

    public function isAdmin(): bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): void
    {
        $this->admin = $admin;
    }

    private function setMode()
    {
        if (lcfirst($this->request_uri[2]) === 'admin') {
            $this->setAdmin(true);
        }
    }
}