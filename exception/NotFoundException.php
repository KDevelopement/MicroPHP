<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp\exception;


/**
 * Class NotFoundException
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}