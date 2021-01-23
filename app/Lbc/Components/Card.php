<?php

namespace App\Lbc\Components;

use App\Lbc\Helpers\Classes;
use Illuminate\View\Component;

class Card extends Component
{
    public $childs;
    public $attrs;
    public $_header;
    public $_body;
    public $_footer;
    public $overlay;
    public $collapse;
    public $_image;

    public function __construct(
        $all = [],
        $id = '',
        $header = [],
        $body = [],
        $footer = [],
        $image = [],
        $class = '',
        $collapse = [],
        $overlay = false
    )
    {
        $this->childs = $all ?? [];
        $this->_footer = $footer ?: $all['footer'] ?? [];
        $this->overlay = $overlay ?: $all['overlay'] ?? false;
        $this->collapse = $collapse ?: $all['collapse'] ?? [];
        $this->attrs = [
            'class' => 'card ' . ($class ?: $all['class'] ?? ''),
            'id' => $id ?: $all['id'] ?? '',
        ];

        $merge = ['_image', '_header', '_body'];
        foreach($merge as $item) {
            $objectName = $item;
            $item = \substr($item, 1);
            $this->$objectName = \array_replace_recursive (
                $all[$item] ?? [],
                ${$item} ?? []
            );
        }

        $this->_body['class'] = Classes::get([
            $this->overlay === true ? 'card-img-overlay' : 'card-body',
            $this->_body['class'] ?? ''
        ]);
        $this->_footer['class'] = Classes::get([
            'card-footer',
            $this->_footer['class'] ?? ''
        ]);

        $this->attrs = \array_filter($this->attrs);
    }

    private function getHeaderId(): string
    {
        $id = $this->header['id'] ?? '';

        if (isset($this->collapse['id'])) {
            $id = 'collapseHeader-' . $this->collapse['id'];
        }

        return !empty($id) ? ' id="' . $id . '"' : '';
    }

    private function getCollapseAttrs(array $collapse): string
    {
        $class = 'collapse';
        $ariaExpanded = 'false';
        $attrs = 'aria-labeledbdy="'. $collapse['id'] .'"';

        if (isset($collapse['parent'])) {
            $attrs .= 'data-parent="#'. $collapse['parent'] .'"';
        }
        if (isset($collapse['index']) && $collapse['index'] === 0) {
            $class .= ' show';
            $ariaExpanded = 'true';
        }

        return $attrs . ' class="' . $class . '" aria-expanded="' . $ariaExpanded . '"';
    }

    public function render()
    {
        if (!empty($this->collapse)) {
            $this->collapse['attrs'] = $this->getCollapseAttrs($this->collapse);
        }
        if (!empty($this->getHeaderId())) {
            $this->header['id'] = $this->getHeaderId();
        }
        if (!empty($this->_body['headline'])) {
            $this->_body['headline']['class'] = $this->_body['headline']['class'] ?? 'card-title';
        }

        return view('lbc.components.card');
    }
}
