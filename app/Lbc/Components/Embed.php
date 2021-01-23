<?php

namespace App\Lbc\Components;

use App\Lbc\Helpers\Classes;
use Illuminate\View\Component;

class Embed extends Component
{
    public $src;
    public $format;
    public $options;
    public $attrs;

    public function __construct(
        $all = [],
        $src = '',
        $options = '',
        $format = '',
        $class = ''
    )
    {
        $this->childs = $all ?? [];
        $this->src = $src ?: $all['src'] ?? '';
        $this->options = $options ?: $all['options'] ?? 'allowfullscreen';
        $this->format = $format ?: $all['format'] ?? '16by9';
        $this->attrs = [
            'class' => $class ?: $all['class'] ?? '',
        ];
        $this->attrs['class'] = Classes::get([
            'embed-responsive embed-responsive-' . $this->format,
            $this->attrs['class'],
        ]);
        $this->attrs = \array_filter($this->attrs);
    }

    public function render()
    {
        return view('lbc.components.embed');
    }
}
