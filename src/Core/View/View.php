<?php

namespace Rodineiteixeira\Mvc\Core\View;

# use Rodineiteixeira\Mvc\Core\View\Providers\PlatesProvider as ViewProvider;
use Rodineiteixeira\Mvc\Core\View\Providers\TwigProvider as ViewProvider;

class View extends ViewProvider
{
    /**
     * @param string $path
     * @param string $extension
     */
    public function __construct(string $path, string $extension = 'twig.php')
    {
        parent::__construct($path, $extension);
    }
}