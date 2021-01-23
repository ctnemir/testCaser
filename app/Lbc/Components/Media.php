<?php

namespace App\Lbc\Components;

use App\Lbc\Helpers\Attributes;
use App\Lbc\Helpers\Classes;
use Illuminate\View\Component;

class Media extends Component
{
    public $attrs;

    public $attrs2;

    public $all;

    public $image;

    public $text;

    public $excerpt;

    public $body;

    public $headline;

    public function __construct(
        $all = [],
        $class = '',
        $image = [],
        $excerpt = [],
        $body = [],
        $text = '',
        $headline = []
    ) {
        $this->all = $all ?? [];
        $this->excerpt = $excerpt ?: $all['excerpt'] ?? [];
        $this->headline = $headline ?: $all['headline'] ?? [];
        $this->image = $image ?: $all['image'] ?? [];
        $this->body = $body ?: $all['body'] ?? [];
        $this->text = $text ?: $all['text'] ?? '';
        $this->attrs2 = Attributes::get($all ?? [], [
            'class', 'body', 'text', 'image', 'headline'
        ]);
        $this->attrs['class'] = Classes::get([
            'media',
            'class' => $class ?: $all['class'] ?? '',
        ]);
        $this->headline['class'] = Classes::get([
            'media-title',
            $this->headline['class'] ?? '',
        ]);
        $this->body['class'] = Classes::get([
            'media-body',
            $this->body['class'] ?? '',
        ]);
        $this->body['attrs'] = Attributes::get($this->body);
        $this->attrs = \array_filter($this->attrs);

        $merge = ['image', 'headline', 'excerpt'];
        foreach($merge as $item) {
            $this->$item = \array_replace_recursive (
                $all[$item] ?? [],
                $this->$item ?? []
            );
        }

        if (isset($this->excerpt['show']) && isset($this->excerpt['text'])) {
            $this->text = $this->excerpt['text'];
        }
    }

    public function render()
    {
        return view('lbc.components.media');
    }
}
