<?php

namespace App\Lbc\Components\Forms;

use Illuminate\View\Component;
use App\Lbc\Helpers\Attributes;
use App\Lbc\Helpers\Classes;

class Select extends Component
{
    public $type;
    public $variant;
    public $help;
    public $group = [];
    public $options = [];
    public $grid;
    public $label = [];
    public $attrs;

    public function __construct(
        $all = [],
        $group = [],
        $options = [],
        $label = [],
        $type = 'text',
        $name = '',
        $grid = [],
        $help = '',
        $variant = '',
        $class = ''
    )
    {
        $this->type = $type ?: $all['type'] ?? '';
        $this->group = $group ?: $all['group'] ?? [];
        $this->grid = $grid ?: $all['grid'] ?? [];
        $this->options = $options ?: $all['options'] ?? [];
        $this->label = $label ?: $all['label'] ?? [];
        $this->help = $help ?: $all['help'] ?? '';
        $this->variant = $variant ?: $all['variant'] ?? '';

        $this->attrs = [
            'class' => $class ?: $all['class'] ?? '',
        ];
        $this->attrs['class'] = Classes::get([
            'form-control',
            $this->attrs['class']
        ]);
        $this->label['class'] = Classes::get([
            $this->label,
            $this->grid[0] ?? ''
        ]);
        $this->group['class'] = Classes::get([
            'form-group',
            $this->group,
            isset($this->grid[0]) ? 'form-row' : ''
        ]);
        $this->label['attrs'] = Attributes::get($this->label, ['text']);
        $this->group['attrs'] = Attributes::get($this->group);
        $this->attrs = array_filter($this->attrs);
        $this->attrs['name'] = $name ?: $all['name'] ?? '';
    }

    public function render()
    {
        return view('lbc.components.forms.select');
    }
}
