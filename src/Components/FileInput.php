<?php

namespace ConfrariaWeb\File\Components;

use Illuminate\View\Component;

class FileInput extends Component
{

    public $accept;
    public $group;
    public $multiple;
    public $name;
    public $type;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $accept = NULL, $group = NULL, $multiple = false, $type = NULL, $value = NULL)
    {
        $this->accept = $accept ?? NULL;
        $this->group = $group ?? 'general';
        $this->multiple = $multiple ?? false;
        $this->type = $type ?? 'file';
        $this->value = $value ?? NULL;
        $this->name = 'files[' . $this->group . '][' . $name . '][]';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('file::components.forms.' . $this->type);
    }

}
