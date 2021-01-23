@extends('lbc.themes.liara.pages.base')

@php
  $bodyClass = 'view-homepage';
@endphp

@section('page-header')
  <div class="page-header page-header-has-image d-flex align-items-center">
    <x-image
      src="liara/images/homepage/sunset.jpg"
      class="page-header-image animated fadeIn faster"
    />

    <div class="container">
      <div class="page-header-lead lead position-relative mb-5 mb-lg-0">
        <p class="mb-2 mb-lg-0">Welcome to Liara</p>

        <h1 class="page-header-title">
          Create quickly and easily, something beautiful with Laravel Bootstrap Components
        </h1>

        <p>Build your website with a new components generation</p>

        <a class="btn btn-primary text-uppercase" href="https://shop.zundel-webdesign.de/laravel-bootstrap-components-incl-themes">Purchase</a>
      </div>
    </div>
  </div>
@endsection

@section('page-content')
  @include('lbc.themes.liara.pages.homepage.snippets.theme-features')

  <div class="container font-size-lg">
    <h2>At vero eos</h2>
    <p>
      Maecenas tempus, tellus eget condimentum rhoncus<br>
      Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.
    </p>

    <p class="mb-3 mb-lg-5">
      <a class="btn btn-outline-secondary" href="#">Find Out More</a>
    </p>

    @include('lbc.themes.liara.pages.homepage.snippets.row-1')
    @include('lbc.themes.liara.pages.homepage.snippets.row-2')
  </div>

  @include('lbc.themes.liara.pages.homepage.snippets.row-3')
  @include('lbc.themes.liara.pages.homepage.snippets.row-location')
@endsection
