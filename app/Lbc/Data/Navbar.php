<?php

namespace App\Lbc\Data;

use App\Http\Controllers\Controller;

class Navbar extends Controller
{
    static function get()
    {
        return [
            [
                'link' => [
                    'text' => 'Components',
                    'href' => '#',
                ],
                'childs' => [
                    [
                        'link' => [
                            'text' => 'Alerts',
                            'href' => route('components', 'alerts'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Badges',
                            'href' => route('components', 'badges'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Breadcrumbs',
                            'href' => route('components', 'breadcrumbs'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Card',
                            'href' => route('components', 'cards'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Carousel',
                            'href' => route('components', 'carousel'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Collapse',
                            'href' => route('components', 'collapse'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Forms',
                            'href' => route('components', 'forms'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Media',
                            'href' => route('components', 'media'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Modal',
                            'href' => route('components', 'modal'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Pagination',
                            'href' => route('components', 'pagination'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Headline',
                            'href' => route('components', 'headline'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Embed',
                            'href' => route('components', 'embed'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Link',
                            'href' => route('components', 'link'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Image',
                            'href' => route('components', 'image'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'SVG',
                            'href' => route('components', 'svg'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Stripe Nav <span style="font-size:50%;position:relative;bottom:2px" class="badge badge-danger">NEW</span>',
                            'href' => route('components', 'stripe-nav'),
                        ],
                    ],
                ],
            ],
            [
                'link' => [
                    'text' => 'Examples',
                    'href' => '#',
                ],
                'childs' => [
                    [
                        'link' => [
                            'text' => 'Album',
                            'href' => route('examples', 'album'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Pricing',
                            'href' =>route('examples', 'pricing'),
                        ],
                    ],
                    [
                        'link' => [
                            'text' => 'Forms',
                            'href' =>route('examples', 'forms'),
                        ],
                    ],
                ],
            ],
            [
                'link' => [
                    'text' => 'Themes',
                    'href' => '#',
                ],
                'childs' => [
                    [
                        'link' => [
                            'text' => 'Liara',
                            'href' => url('themes/liara'),
                        ],
                    ]
                ],
            ],
            [
                'link' => [
                    'text' => 'Download',
                    'href' => 'https://laravel-bootstrap-components.com/downloads',
                ]
            ],
        ];
    }
}
