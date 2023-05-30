<?php

namespace Rodineiteixeira\Mvc\Core\View\Providers;

use League\Plates\Engine;
use Rodineiteixeira\Mvc\Core\View\ViewInterface;

class PlatesProvider implements ViewInterface
{
    /**
     * @var Engine
     */
    private Engine $engine;

    /**
     * @var string
     */
    private string $extension;

    /**
     * @param string $path
     * @param string $extension
     */
    public function __construct(string $path, string $extension = 'php')
    {
        $this->extension = $extension;
        $this->engine = Engine::create($path, $this->extension);
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