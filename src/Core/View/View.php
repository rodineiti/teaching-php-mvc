<?php

namespace Rodineiteixeira\Mvc\Core\View;

use League\Plates\Engine;

class View
{
    /**
     * @var Engine
     */
    private $engine;

    /**
     * @param string $path
     * @param string $extension
     */
    public function __construct(string $path, string $extension = 'php')
    {
        $this->engine = Engine::create($path, $extension);
    }

    /**
     * @param string $template
     * @param array $data
     * @return string
     */
    public function render(string $template, array $data = []): string
    {
        return $this->engine->render($template, $data);
    }
}