<?php
/**
 * User: k7brasil
 * Date: 30/07/2022
 * Time: 8:43 PM
 */
namespace k7brasil\microphp\form;


use k7brasil\microphp\Model;

/**
 * Class BaseField
 *
 * @author  K7 <@k7brasil>
 * @package k7brasil\microphp\form
 */
abstract class BaseField
{

    public Model $model;
    public string $attribute;
    public string $type;

    /**
     * Field constructor.
     *
     * @param \k7brasil\microphp\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('<div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }

    abstract public function renderInput();
}