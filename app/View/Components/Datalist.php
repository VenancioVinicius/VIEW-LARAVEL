<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datalist extends Component
{
    public $header;
    public $data;
    public $crud;
    public $hide;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, $data, $crud, $hide)
    {
        $this->header = $header;
        $this->data = $data;
        $this->crud = $crud;
        $this->hide = $hide;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datalist');
    }
}
