<?php

namespace Rodineiteixeira\Mvc\Core\View\Providers;

use Twig\Environment as Engine;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Rodineiteixeira\Mvc\Core\View\ViewInterface;

class TwigProvider implements ViewInterface
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
    public function __construct(string $path, string $extension = 'twig.php')
    {
        $this->extension = $extension;
        $this->engine = new Engine(new FilesystemLoader($path));

        $urlFunction = new \Twig\TwigFunction('url', function (?string $name = null, $parameters = null, ?array $getParams = null) {
            return url($name, $parameters, $getParams);
        });

        $this->engine->addFunction($urlFunction);
    }

    /**
     * @param string $template
     * @param array $data
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function render(string $template, array $data = []): string
    {
        return $this->engine->render("{$template}.{$this->extension}", $data);
    }
}