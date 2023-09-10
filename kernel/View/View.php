<?php

namespace App\Kernel\View;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;
use App\Kernel\Storage\StorageInterface;

class View implements ViewInterface
{
    private string $title;

    public function __construct(
        private SessionInterface $session,
        private AuthInterface $auth,
        private StorageInterface $storage
    ) {
    }

    public function page(string $name, array $data = [], string $title = ''): void
    {
        $this->title = $title;

        $viewPath = APP_PATH."/views/pages/$name.php";

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("View $name not found");
        }

        extract(array_merge($this->defaultData(), $data));

        include_once $viewPath;
    }

    public function component(string $name, array $data = []): void
    {
        $componentPath = APP_PATH."/views/components/$name.php";

        if (! file_exists($componentPath)) {
            echo "Component $name not found";

            return;
        }

        extract(array_merge($this->defaultData(), $data));

        include $componentPath;
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session,
            'auth' => $this->auth,
            'storage' => $this->storage,
        ];
    }

    public function title(): string
    {
        return $this->title;
    }
}
