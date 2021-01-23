@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.';
@endphp

@section('component-content')
  <h1 id="pagination">Pagination</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <p>In laravel is a pagination function already finished existing, if you use
    this, change the array's to laravel pagination objects: <a target="_blank" href=" https://laravel.com/docs/5.8/pagination">
      https://laravel.com/docs/5.8/pagination</a></p>

  <!-- example-start-1 -->
  <x-pagination
      :current="4"
      :total="4"
      :next="[
      'href' => url()->current() . '?page=3',
      'text' => 'Next'
    ]"
      :prev="[
      'href' => url()->current() . '?page=3',
      'text' => 'Previous'
    ]"
      :pages="4"
  />
  <!-- example-end-1-->
  {!! GrepCodeExampleComponents::get(1) !!}

  <h3 class="mt-3">Sizing (LG)</h3>
  <!-- example-start-3 -->
  <x-pagination
      class="pagination-lg"
      :current="4"
      :total="4"
      :next="[
      'href' => url()->current() . '?page=3',
      'text' => 'Next'
    ]"
      :prev="[
      'href' => url()->current() . '?page=3',
      'text' => 'Previous'
    ]"
      :pages="4"
  />
  <!-- example-end-3-->
  {!! GrepCodeExampleComponents::get(3) !!}

  <h3 class="mt-3">Sizing (SM)</h3>
  <!-- example-start-4 -->
  <x-pagination
      class="pagination-sm"
      :current="4"
      :total="4"
      :next="[
      'href' => url()->current() . '?page=3',
      'text' => 'Next'
    ]"
      :prev="[
      'href' => url()->current() . '?page=3',
      'text' => 'Previous'
    ]"
      :pages="4"
  />
  <!-- example-end-4-->
  {!! GrepCodeExampleComponents::get(4) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Pagination',
    'type' => 'components',
    'variables' => [
      [
        'name' => 'all',
        'type' => 'array',
        'default' => '',
        'description' => 'Submit all data.',
      ],[
        'name' => 'class',
        'type' => 'string',
        'default' => '',
        'description' => 'Classes can be added, all other attributes can also be set.',
      ],[
        'name' => 'current',
        'type' => 'string',
        'default' => '0',
        'description' => 'Current page.',
      ],[
        'name' => 'total',
        'type' => 'string',
        'default' => '0',
        'description' => 'Total page.',
      ],[
        'name' => 'next',
        'type' => 'string',
        'default' => '',
        'description' => 'HTML is allowed.',
      ],[
        'name' => 'prev',
        'type' => 'string',
        'default' => '',
        'description' => 'HTML is allowed.',
      ],[
        'name' => 'pages',
        'type' => 'string',
        'default' => '0',
        'description' => 'All pages.',
      ],
    ],
  ])
@endsection

