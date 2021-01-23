@extends('lbc.themes.liara.pages.base')

@php
  $bodyClass = 'view-features';
@endphp

@section('page-header')
  <h1 class="text-center my-3 my-lg-5 display-4">
    <small>Eodem nunc</small><br>

    Circiter Natus mirum<br>
    exlusis et dapibus
  </h1>
@endsection

@section('page-content')
  <div class="container font-size-lg">
    @include('lbc.themes.liara.pages.homepage.snippets.row-1')
    @include('lbc.themes.liara.pages.homepage.snippets.row-2')
  </div>

  @include('lbc.themes.liara.pages.homepage.snippets.row-3')
@endsection
