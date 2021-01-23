<?php

namespace App\Lbc\Themes\Liara;

use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function send(Request $request, Mailer $mailer) {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your e-mail address.',
            'email.email' => 'Please enter a correct e-mail address.',
            'message.required' => 'Please enter your message.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('liara.contact'))->withErrors($validator)->withInput();
        }

        $mailer->to('info@zundel-webdesign.de')->send(new \App\Lbc\Themes\Liara\Mail\Contact($request->all()));

        return redirect(route('liara.contact'))->with('success', 'Your email was successfully sent.');
    }

    public static function contact() {
        $data = [
            'meta' => [
                'title' => 'Contact - Blog | Liara',
                'robots' => 'index, follow',
            ],
        ];

        return view('lbc.themes.liara.pages.contact.contact', compact('data'));
    }
}
