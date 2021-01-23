<?php

namespace App\Lbc;

use App\Lbc\Components\Alert;
use App\Lbc\Components\Badge;
use App\Lbc\Components\Breadcrumb;
use App\Lbc\Components\Card;
use App\Lbc\Components\Carousel;
use App\Lbc\Components\Embed;
use App\Lbc\Components\StripeNav;
use App\Lbc\Components\Svg;
use App\Lbc\Components\Forms\Input;
use App\Lbc\Components\Forms\Checkbox;
use App\Lbc\Components\Forms\Select;
use App\Lbc\Components\Forms\Textarea;
use App\Lbc\Components\Forms\Upload;
use App\Lbc\Components\Forms\Radio;
use App\Lbc\Components\Forms\Switches;
use App\Lbc\Components\Headline;
use App\Lbc\Components\Image;
use App\Lbc\Components\Link;
use App\Lbc\Components\Modal;
use App\Lbc\Components\Media;
use App\Lbc\Components\Pagination;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use App\Lbc\Data\Navbar;
use Jenssegers\Agent\Agent;

class LaravelBootstrapComponents
{
    public static function init()
    {
        Blade::component(Alert::class, 'alert');
        Blade::component(Badge::class, 'badge');
        Blade::component(Breadcrumb::class, 'breadcrumb');
        Blade::component(Card::class, 'card');
        Blade::component(Carousel::class, 'carousel');
        Blade::component(Embed::class, 'embed');
        Blade::component(Svg::class, 'svg');
        Blade::component(Input::class, 'input');
        Blade::component(Checkbox::class, 'checkbox');
        Blade::component(Select::class, 'select');
        Blade::component(Textarea::class, 'textarea');
        Blade::component(Switches::class, 'switches');
        Blade::component(Modal::class, 'modal');
        Blade::component(Radio::class, 'radio');
        Blade::component(Media::class, 'media');
        Blade::component(Upload::class, 'upload');
        Blade::component(Link::class, 'link');
        Blade::component(Headline::class, 'headline');
        Blade::component(StripeNav::class, 'stripe-nav');
        Blade::component(Image::class, 'image');
        Blade::component(Pagination::class, 'pagination');

        Blade::include('lbc/components/figcaption', 'figcaption');

        Blade::directive('icon', function ($expression) {
            return "<span class='<?=" . $expression . "; ?>'></span>";
        });

        View::share('agent', new Agent());
    }

    public static function initDocs()
    {
        if (File::exists(public_path('lbc/docs/css/docs.min.css')) === false) {
            File::copy(
                resource_path('views/lbc/css/docs.min.css'),
                public_path('lbc-docs.min.css')
            );
        }

        $domain = request()->getHost() === 'laravel-bootstrap-components.com' ? '' : '/lbc';
        Route::get($domain, ['uses' => '\App\Lbc\HomepageController@display', 'as' => 'homepage']);
        Route::get($domain . '/components/{slug}', ['uses' => '\App\Lbc\ComponentsController@display', 'as' => 'components'])->where('slug', '(.*)');
        Route::get($domain .'/examples/{slug}', ['uses' => '\App\Lbc\ExamplesController@display', 'as' => 'examples'])->where('slug', '(.*)');

        View::share('navbar', Navbar::get());
    }

    public static function initThemeLiara()
    {
        Route::get('/themes/liara', ['uses' => '\App\Lbc\Themes\Liara\HomepageController@home', 'as' => 'liara']);
        Route::get('/themes/liara/features', ['uses' => '\App\Lbc\Themes\Liara\PagesController@features', 'as' => 'liara.features']);
        Route::get('/themes/liara/imprint', ['uses' => '\App\Lbc\Themes\Liara\PagesController@imprint', 'as' => 'liara.imprint']);
        Route::get('/themes/liara/about', ['uses' => '\App\Lbc\Themes\Liara\PagesController@about', 'as' => 'liara.about']);
        Route::get('/themes/liara/blog', ['uses' => '\App\Lbc\Themes\Liara\BlogController@blog', 'as' => 'liara.blog']);
        Route::get('/themes/liara/{slug}', '\App\Lbc\Themes\Liara\Helpers\RouteDispatch@get')->where('slug', '(.*)');
        Route::get('/themes/liara/category/{slug}', '\App\Lbc\Themes\Liara\Helpers\RouteDispatch@get')->where('slug', '(.*)');
        Route::get('/themes/liara/author/{slug}', '\App\Lbc\Themes\Liara\Helpers\RouteDispatch@get')->where('slug', '(.*)');
        Route::get('/themes/liara/result/', ['uses' => '\App\Lbc\Themes\Liara\BlogController@search', 'as' => 'liara.search'])->where('slug', '(.*)');
        Route::get('/themes/liara/contact/', ['uses' => '\App\Lbc\Themes\Liara\ContactController@contact', 'as' => 'liara.contact']);
        Route::post('/themes/liara/contact/', ['uses' => '\App\Lbc\Themes\Liara\ContactController@send', 'as' => 'liara.contact']);
        Route::post('/themes/liara/comment/send', ['uses' => '\App\Lbc\Themes\Liara\BlogController@send', 'as' => 'liara.send.comment']);
    }
}
