<?php

namespace ConfrariaWeb\File\Components;

use Illuminate\View\Component;

class File extends Component
{

    public $file;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param $file
     * @param string $type
     */
    public function __construct($file, $type = 'image')
    {
        $this->file = $file ?? NULL;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('file::components.files.' . $this->type);
    }
}
