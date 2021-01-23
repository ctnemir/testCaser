<?php

namespace App\Lbc\Themes\Liara;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function features()
    {
        $data = [
            'meta' => [
                'title' => 'Features | Liara',
                'robots' => 'index, follow',
            ]
        ];

        return view('lbc.themes.liara.pages.features.features', compact('data'));
    }

    public function imprint()
    {
        $data = [
            'meta' => [
                'title' => 'Imprint | Liara',
                'robots' => 'index, follow',
            ]
        ];

        return view('lbc.themes.liara.pages.imprint.imprint', compact('data'));
    }

    public function about()
    {
        $data = [
            'meta' => [
                'title' => 'About | Liara',
                'robots' => 'index, follow',
            ]
        ];

        return view('lbc.themes.liara.pages.about.about', compact('data'));
    }
}
