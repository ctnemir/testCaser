<?php

namespace App\Lbc\Components;

use App\Lbc\Helpers\Classes;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $childs;
    public $attrs;
    public $current;
    public $total;
    public $next;
    public $prev;
    public $pages;

    public function __construct(
        $all = [],
        $current = '',
        $total = '',
        $next = [],
        $prev = [],
        $pages = '',
        $class = ''
    )
    {
        $this->childs = $all ?? [];
        $this->current = $current ?: $all['current'] ?? 0;
        $this->total = $total ?: $all['total'] ?? 0;
        $this->next = $next ?: $all['next'] ?? [];
        $this->prev = $prev ?: $all['prev'] ?? [];
        $this->pages = $pages ?: $all['pages'] ?? 0;
        $this->attrs['class'] = Classes::get([
            'pagination',
            'class' => $class ?: $all['class'] ?? '',
        ]);
        $this->attrs = \array_filter($this->attrs);
    }

    public function render()
    {
        return view('lbc.components.pagination');
    }
}
