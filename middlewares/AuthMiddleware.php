<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp\middlewares;


use k7brasil\microphp\Application;
use k7brasil\microphp\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}