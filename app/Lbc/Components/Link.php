<?php

namespace App\Lbc\Components;

use App\Lbc\Helpers\Classes;
use Illuminate\View\Component;

class Link extends Component
{
    public $all;
    public $text;
    public $trim;
    public $attrs;
    public $collapse;

    public function __construct(
        $all = [],
        $href = '',
        $title = '',
        $trim = 0,
        $text = '',
        $collapse = [],
        $target = '',
        $class = ''
    )
    {
        $this->all = $all ?? [];
        $this->text = $text ?: $all['text'] ?? '';
        $this->trim = $trim ?: $all['trim'] ?? 0;
        $this->collapse = $collapse ?: $all['collapse'] ?? [];
        $this->attrs = [
            'class' => $class ?: $all['class'] ?? '',
            'href' => $href ?: $all['href'] ?? '',
            'title' => $title ?: $all['title'] ?? '',
            'target' => $target ?: $all['target'] ?? '',
        ];
        if (isset($this->collapse['id'])) {
            $this->attrs['data-toggle'] =  'collapse';
            $this->attrs['data-target'] =  '#collapse-' . $this->collapse['id'];
            $this->attrs['href'] =  '#';
        }
        $this->attrs['class'] = Classes::get([
            $this->all['class'] ?? '',
            $this->attrs['class']
        ]);
        $this->attrs = \array_filter($this->attrs);
    }

    public function render()
    {
        return view('lbc.components.link');
    }
}
