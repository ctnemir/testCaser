<?php

namespace App\Lbc;

use App\Lbc\Data\Navbar;

class HomepageController
{
    public function display() {
        $data = [
            'meta' => [
                'title' => 'Laravel Bootstrap Components'
            ],
        ];

        return view('lbc/pages/homepage/homepage', compact('data'));
    }
}
