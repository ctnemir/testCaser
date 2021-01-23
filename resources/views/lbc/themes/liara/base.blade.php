<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @isset($data['meta']['description'])
    <meta name="description" content="{!! trim(strip_tags($data['meta']['description'])) !!}">
  @endisset
  @if(isset($data['meta']['keywords']) && !empty($data['meta']['keywords'] ))
    <meta name="keywords" content="{!! trim(strip_tags($data['meta']['keywords'] ?? '')) !!}">
  @endif

  <title>{!! trim(strip_tags($data['meta']['title'] ?? env('APP_NAME'))) !!}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <link rel="canonical" href="{{ url()->current() }}">
  <link href="{{ url('favicon.ico') }}" rel="shortcut icon">

  @stack('html-head')
</head>

@php
  $bodyClasses = '';
  if(isset($bodySectionClass)) {
    $bodyClasses .= $bodySectionClass;
  }
  if(isset($bodyClass)) {
    $bodyClasses .= ' ' . $bodyClass;
  }
@endphp

<body class="{{ $bodyClasses }}">
@section('navigation')
  @include('lbc.themes.liara.parts.navigation.navigation')
@show

<header class="page-header">
  @yield('page-header')
</header>

<div class="page-content">
  @yield('page-content')
</div>

@section('page-footer')
  <footer class="page-footer py-3 py-lg-5">
    @include('lbc.themes.liara.parts.page-footer')
  </footer>
@show

<script src="{{ asset('/js/app.js') }}" defer></script>

@stack('js')

</body>
</html>
