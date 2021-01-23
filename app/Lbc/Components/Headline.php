<?php

namespace App\Lbc\Components;

use Illuminate\View\Component;

class Headline extends Component
{
    public $all;
    public $text;
    public $tag;
    public $link;
    public $trim;
    public $attrs;

    public function __construct(
        $all = [],
        $link = [],
        $text = '',
        $trim = 0,
        $tag = '',
        $class = ''
    )
    {
        $this->all = $all ?? '';
        $this->link = $link ?: $all['link'] ?? [];
        $this->text = $text ?: $all['text'] ?? '';
        $this->tag = $tag ?: $all['tag'] ?? 'h2';
        $this->trim = $trim ?: $all['trim'] ?? 0;
        $this->attrs = [
            'class' => $class ?: $all['class'] ?? '',
        ];
        $this->attrs = \array_filter($this->attrs);
    }

    public function render()
    {
        return view('lbc.components.headline');
    }
}
