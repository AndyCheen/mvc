<?php

namespace App\core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\controllers\\';
    private string $methodName = '';
    private string $controllerName = '';
    private array $request_uri = [];
    private array $config = [];



    public function __construct($config)
    {
        $this->config = $config;
        $this->setRequestUri();
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
        if (isset($this->request_uri[2]) && !empty($this->request_uri[2])) {
            $this->controllerName = $this->request_uri[2];
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
        if (isset($this->request_uri[3])) {
            $this->methodName = $this->request_uri[3];
        } else {
            $this->methodName = 'index';
        }
    }

    public function getMethodName(): string
    {
        return lcfirst($this->methodName);
    }

    public function getNamespace(): string
    {
        return self::CONTROLLER_NAMESPACE . ucfirst($this->getControllerName());
    }

    private function validate(): void
    {
        $actionPath = ucfirst($this->getControllerName()) . '/' . lcfirst($this->getMethodName());
        if (!isset($this->config[$actionPath])) {
            $this->controllerName = 'NotFound';
            $this->methodName = 'index';
        } else {
            $configArray = explode("/", $this->config[$actionPath]);
            $this->controllerName = ucfirst($configArray[0]);
            $this->methodName = lcfirst($configArray[1]);
        }
    }
}