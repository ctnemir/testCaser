<h2 class="mb-4">Install</h2>

<p>Compatible with Laravel 5.5 - 8.x</p>

<div class="row">
  <div class="col-sm-6">
    <ol class="pl-3">
      <li class="mb-3">Unzip the package</li>
      <li class="mb-3">
        Paste all folders and files in your Laravel root folder<br>
        <code>app/Lbc</code> and <code>resources/views/lbc</code>.
      </li>
      <li>
        Install following composer and npm packages.
        <pre class="prism-code mb-3">
composer require intervention/image
composer require jenssegers/agent
npm i bootstrap@4.5.2
npm i jquery@3.4.1
npm i popper.js
npm i vanilla-lazyload
npm i prismjs</pre>
      </li>
      <li>
        Add the following lines in your <code>resources/sass/app.scss</code>.
        <pre class="prism-code mb-3">
// Lbc only
@import  '../views/lbc/assets/sass/app';

// Lbc with theme liara (if you activate theme liara)
// @import  '../views/lbc/assets/sass/app-with-theme-liara';
</pre>
      </li>
    </ol>
  </div>

  <div class="col-sm-6">
    <ol class="pl-3">
      <li class="text-hide"></li>
      <li class="text-hide"></li>
      <li class="text-hide"></li>
      <li class="text-hide"></li>
      <li>
        Add the following lines in your <code>resources/js/app.js</code>.
        <pre class="prism-code mb-3">
// Lbc only
require('../views/lbc/assets/js/app')

// Lbc with theme liara (if you activate theme liara)
// require('../views/lbc/assets/js/app-with-theme-liara')
</pre>
      </li>
      <li>
        Add the following lines in your <code>routes/web.php</code>.
        <pre class="prism-code mb-3">
// Lbc basics
App\Lbc\LaravelBootstrapComponents::init();

// abc.com/lbc if you want to have the docs for it
App\Lbc\LaravelBootstrapComponents::initDocs();

// Lbc theme liara (abc.com/liara)
// App\Lbc\LaravelBootstrapComponents::initThemeLiara();</pre>
      </li>
      <li>
        Run <code>npm run production</code> and finish
      </li>
    </ol>
  </div>
</div>
