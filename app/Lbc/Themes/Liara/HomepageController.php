<?php

namespace App\Lbc\Themes\Liara;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function home()
    {
        $data = [
            'meta' => [
                'title' => 'Blog | Liara',
                'robots' => 'index, follow',
            ]
        ];

        return view('lbc.themes.liara.pages.homepage.homepage', compact('data'));
    }
}
