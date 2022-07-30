<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp;

use k7brasil\microphp\middlewares\BaseMiddleware;
/**
 * Class Controller
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \k7brasil\microphp\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \k7brasil\microphp\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}