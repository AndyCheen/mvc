<?php

namespace App\core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\controllers\\';
    public function run(): void
    {
        $namespace = $this->getNamespace();
        $method = $this->getMethod();

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'NotFound';
        }

        $controller = new $namespace();
        $controller->action($method);
    }

    private function prepareControllersName(): array | string
    {
        $result = 'Main';

        if (isset($_SERVER['REQUEST_URI'])) {
            $result= explode("/", $_SERVER['REQUEST_URI']);
        }

        if (is_array($result) && empty($result[2])) {
            $result = 'Main';
        }

        return $result;
    }

    private function getNamespace(): string
    {
        $controllerName = $this->prepareControllersName();
        if (is_string($controllerName)) {
            $namespace = $controllerName;
        } else {
            $namespace = $controllerName[2];
        }

        return self::CONTROLLER_NAMESPACE . ucfirst($namespace);
    }

    private function getMethod(): string
    {
        $controllerName = $this->prepareControllersName();
        if (is_string($controllerName) || !isset($controllerName[3])) {
            $methodName = 'index';
        } else {
            $methodName = $controllerName[3];
        }

        return lcfirst($methodName);
    }
}