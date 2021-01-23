@extends('lbc.themes.liara.base')

@php
  $bodySectionClass = 'section-pages'
@endphp

@section('page-content')
  <div class="container">
    @yield('content')
  </div>
@endsection
