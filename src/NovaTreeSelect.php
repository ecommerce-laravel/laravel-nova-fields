<?php

namespace Niekbr\NovaTreeSelect;

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

//    public function defaultValue($request, $value)
//    {
//        $value = $this->resolveDefaultValue($request);
//
//        return $this->withMeta([
//            'value' => $value
//        ]);
//    }
}
