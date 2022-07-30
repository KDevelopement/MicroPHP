<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp;


/**
 * Class Response
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}