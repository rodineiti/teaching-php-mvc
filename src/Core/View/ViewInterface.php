<?php

namespace Rodineiteixeira\Mvc\Core\View;

interface ViewInterface
{
    /**
     * @param string $template
     * @param array $data
     * @return string
     */
    public function render(string $template, array $data = []): string;
}