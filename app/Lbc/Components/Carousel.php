<?php

namespace App\Lbc\Components;

use Illuminate\View\Component;

class Carousel extends Component
{
    public $childs;
    public $attrs;
    public $items;
    public $indicators;
    public $control;

    public function __construct(
        $all = [],
        $items = [],
        $indicators = false,
        $control = false,
        $class = '',
        $id = ''
    )
    {
        $this->childs = $all ?? [];
        $this->items = $items ?: $all['items'] ?? [];
        $this->indicators = $indicators ?: $all['indicators'] ?? false;
        $this->control = $control ?: $all['control'] ?? false;
        $this->attrs = [
            'class' => 'carousel slide ' . ($class ?: $all['class'] ?? ''),
            'id' => $id ?: $all['id'] ?? '',
        ];
        $this->attrs = \array_filter($this->attrs);
    }

    public function render()
    {
        return view('lbc.components.carousel');
    }
}
