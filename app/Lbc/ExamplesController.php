<?php

namespace App\Lbc;

use App\Lbc\Data\Navbar;

class ExamplesController
{
    public function display($slug) {
        $data = [
            'meta' => [
                'title' => ucfirst($slug). ' - Layout Example'
            ],
        ];

        return view('lbc/pages/examples/' . $slug, compact('data'));
    }
}
