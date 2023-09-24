<?php

namespace Wjurry\NovaTreeSelect;

use Laravel\Nova\Fields\Field;

class NovaTreeSelect extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-tree-select';

    public $disk;

    public function options($value)
    {
        return $this->withMeta([
            'options' => $value
        ]);
    }

    public function multiple($value)
    {
        return $this->withMeta([
            'multiple' => $value
        ]);
    }

    public function showCount($value = false)
    {
        return $this->withMeta([
            'showCount' => $value
        ]);
    }
}
