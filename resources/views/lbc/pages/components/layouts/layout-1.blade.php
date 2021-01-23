@extends('lbc.base')

@section('page-content')
  <div class="container">
    <div class="row">
      <div class="col-md-3 d-none d-md-block">
        @include('lbc/pages/components/snippets/sidebar')
      </div>

      <div class="col-md-9">
        @yield('component-content')
      </div>
    </div>
  </div>
@endsection
