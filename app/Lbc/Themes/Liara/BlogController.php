<?php

namespace App\Lbc\Themes\Liara;

use App\Http\Controllers\Controller;
use App\Lbc\Themes\Liara\Components\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public $posts;
    protected $comments;

    public function __construct()
    {
        $posts = \file_get_contents(
            \app_path(
                'Lbc/Themes/Liara/DataExamples/Blog/Posts.json'
            )
        );
        $comments = \file_get_contents(
            \app_path(
                'Lbc/Themes/Liara/DataExamples/Blog/Comments.json'
            )
        );
        $this->posts = \json_decode($posts, true);
        $this->comments = \json_decode($comments, true);
    }


    public function send(Request $request)
    {
        $rules = [];
        $messages = [];

        foreach ($request->all() as $idx => $item) {
            if (\strpos($idx, 'name') !== false) {
                $rules[$idx] = 'required';
                $messages[$idx.'.required'] = 'Gebe Sie bitte Ihren Vornamen ein.';
            }
            if (\strpos($idx, 'email') !== false) {
                $rules[$idx] = 'required';
                $messages[$idx.'.required'] = 'Gebe Sie bitte Ihre Email-Adresse ein.';
            }
            if (\strpos($idx, 'comment') !== false) {
                $rules[$idx] = 'required';
                $messages[$idx.'.required'] = 'Gebe Sie bitte Ihren Kommentar ein.';
            }
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#currentComment')->withErrors($validator)->withInput();
        }

        return redirect()->to(url()->previous() . '#comments')->with('success', 'Ihre Email wurde erfolgreich versendet.');
    }

    public function blog(Request $request)
    {
        $data = [
            'meta' => [
                'title' => 'Blog | Liara',
                'robots' => 'index, follow',
            ],
            'posts' => $this->posts,
            'pagination' => Pagination::get($request, $this->posts, 6),
        ];

        return view('lbc.themes.liara.blog.startsite.startsite', compact('data'));
    }

    public static function post($slug)
    {
        $blog = new self();
        $currentPost = [];
        foreach ($blog->posts as $post) {
            if (\strpos($post['headline']['link']['href'], $slug) !== false) {
                $currentPost = $post;
            }
        }

        $data = [
            'meta' => [
                'title' => 'Blog | Liara',
                'robots' => 'index, follow',
            ],
            'posts' => $blog->posts,
            'post' => $currentPost,
            'comments' => $blog->comments,
        ];

        return view('lbc.themes.liara.blog.post.post', compact('data'));
    }

    public static function category($request, $slug)
    {
        $blog = new self();
        $data = [
            'meta' => [
                'title' => 'Category ' . $slug['text'] . ' - Blog | Liara',
                'robots' => 'index, follow',
            ],
            'title' => $slug['text'],
            'posts' => $blog->posts,
            'pagination' => Pagination::get($request, $blog->posts, 6),
        ];

        return view('lbc.themes.liara.blog.category.category', compact('data'));
    }

    public static function search($request, $slug)
    {
        $blog = new self();
        $data = [
            'meta' => [
                'title' => 'Search result for ' . $request->input('search') . ' - Blog | Liara',
                'robots' => 'index, follow',
            ],
            'title' => $request->input('search'),
            'posts' => $blog->posts,
            'pagination' => Pagination::get($request, $blog->posts, 6),
        ];

        return view('lbc.themes.liara.blog.search.search', compact('data'));
    }

    public static function author($request, $slug)
    {
        $blog = new self();
        $data = [
            'meta' => [
                'title' => 'Author ' . $slug['link']['text'] . ' - Blog | Liara',
                'robots' => 'index, follow',
            ],
            'author' => $slug,
            'posts' => $blog->posts,
            'pagination' => Pagination::get($request, $blog->posts, 6),
        ];

        return view('lbc.themes.liara.blog.author.author', compact('data'));
    }
}
