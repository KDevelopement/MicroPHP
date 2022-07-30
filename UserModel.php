<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp;

use k7brasil\microphp\db\DbModel;

/**
 * Class UserModel
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}