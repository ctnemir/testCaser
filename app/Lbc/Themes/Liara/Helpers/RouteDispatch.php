<?php

namespace App\Lbc\Themes\Liara\Helpers;

use App\Lbc\Themes\Liara\BlogController;
use App\Lbc\Themes\Liara\ContactController;
use Illuminate\Http\Request;

class RouteDispatch
{
    public function get(Request $request, $slug)
    {
        $blog = new BlogController();
        $categories = [];
        $currentCategory = [];
        $authors = [];
        $currentAuthor = [];

        foreach ($blog->posts as $post) {
            foreach ($post['category'] as $category) {
                $categories[] = $category['link']['href'];
                if (\strpos($category['link']['href'], $slug) !== false) {
                    $currentCategory = $category['link'];
                }
            }
        }

        foreach ($blog->posts as $author) {
            $authors[] = $author['author']['link']['href'];
            if (\strpos($author['author']['link']['href'], $slug) !== false) {
                $currentAuthor = $author['author'];
            }
        }



        if (in_array(strtolower($slug), \array_unique($categories))) {
            return BlogController::category($request, $currentCategory);
        } elseif ($slug === 'result') {
            return BlogController::search($request, $slug);
        } elseif ($slug === 'contact') {
            return ContactController::contact($request, $slug);
        } elseif (in_array(strtolower('/themes/liara/' . $slug), \array_unique($authors))) {
            return BlogController::author($request, $currentAuthor);
        } else {
            return BlogController::post($slug);
        }
    }
}
