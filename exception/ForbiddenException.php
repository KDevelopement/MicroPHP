<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp\exception;


use k7brasil\microphp\Application;

/**
 * Class ForbiddenException
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}