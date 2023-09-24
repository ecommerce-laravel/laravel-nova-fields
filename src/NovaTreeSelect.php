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

    /**
     * List of options
     *
     * @param $value
     * @return mixed
     */
    public function options($value)
    {
        return $this->withMeta([
            'options' => $value
        ]);
    }

    /**
     * Is support multiple selections
     *
     * @param $value
     * @return mixed
     */
    public function multiple($value)
    {
        return $this->withMeta([
            'multiple' => $value
        ]);
    }

    /**
     * Show children count for each node
     *
     * @param $value
     * @return mixed
     */
    public function showCount($value = false)
    {
        return $this->withMeta([
            'showCount' => $value
        ]);
    }

    /**
     * Change selection behavior
     *
     * @param $value "ALL|BRANCH_PRIORITY|LEAF_PRIORITY|ALL_WITH_INDETERMINATE
     * @return mixed
     */
    public function valueConsistsOf($value = 'ALL')
    {
        return $this->withMeta([
            'valueConsistsOf' => $value
        ]);
    }
}
