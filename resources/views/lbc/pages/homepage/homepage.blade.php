@extends('lbc/base')

@section('page-content')
  <div class="container">
    <div class="p-4 p-md-5 mb-5 bg-lighter rounded-lg">
      <h1>Laravel bootstrap components</h1>

      <p class="lead">
        Since all components have been created in the Template Engine Blade,
        it is no longer necessary to edit completly HTML of component of
        Bootstrap.
        This saves a lot of time in development.
        If you still want to change the component, you only have to do this in
        one file and not in the whole project.
        All changes are automatically transferred throughout the project.
        Bootstrap updates will no longer be a problem for you.
        All new features are automatically updated.
        You just have to install the latest version of Lbc and your project is
        up to date.
      </p>

      <p class="lead">Convince yourself and look here:
        <a href="{{ route('examples', 'forms') }}">Examples</a></p>
    </div>

    <h2 class="mb-4">Small characters, big effect</h2>

    <div class="row">
      <div class="col-md-5 align-items-center d-flex justify-content-between">
            <pre class="prism-code">
&lt;x-input
  name="email"
  type="email"
  placeholder="default"
  help="Input information text."
  required
  :label="[
    'class' =&gt; 'custom-label-class',
    'text' =&gt; 'Email Address',
  ]"
  :grid="['col-sm-3', 'col-sm-9']"
/&gt;
            </pre>
        <span class="ml-4">=</span>
      </div>

      <div class="col-md-7">
        <pre class="prism-code my-2">
&lt;div class="form-group form-row"&gt;
  &lt;label class="col-sm-3 custom-label-class" for="input-email"&gt;
    Email Address
  &lt;/label&gt;

  &lt;div class="col-sm-9"&gt;
    &lt;input class="form-control is-valid" type="email" name="email" placeholder="default" required="required" id="input-email"&gt;
    &lt;small id="help-email" class="form-text text-muted"&gt;
      Input information text.
    &lt;/small&gt;

    // The server validation of Laravel is integrated
    // in the components with the standard bootstrap markup:
    &lt;div class="valid-feedback"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
        </pre>
      </div>
    </div>

    <hr class="my-4">

    @include('lbc.pages.homepage.snippets.install')

    <hr class="my-4">

    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4">Package</h2>

        <ul>
          <li>Regular updates</li>
          <li>E-Mail Support</li>
          <li>Theme Liara</li>
          <li>Bootstrap component in the Laravel-Template-Engine Blade</li>
          <li>Many more utilities css classes</li>
          <li>
            <a href="{{ route('components', 'alerts') }}">Documentation</a>
          </li>
          <li>
            <a href="{{ route('examples', 'forms') }}">Template-Examples</a>
          </li>
          <li>Lazyload for images <small class="text-muted">(vanilla-lazyload)</small></li>
          <li>Mobile detect <small class="text-muted">(jenssegers/agent)</small></li>
          <li>Image-Resize Tool <small class="text-muted">(Intervention Image)</small></li>
        </ul>
      </div>

      <div class="col-md-6 text-center">
        <h2 class="mb-5">Thank you for your attention</h2>

        <a href="https://laravel-bootstrap-components.com/downloads" class="btn btn-primary btn-lg shadow" style="margin-bottom:100px">
          Download LBC
        </a>
      </div>
    </div>
  </div>
@endsection
