<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}