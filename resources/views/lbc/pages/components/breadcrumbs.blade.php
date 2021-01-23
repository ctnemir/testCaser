@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.';
@endphp

@section('component-content')
  <h1 id="breadcrumb">Breadcrumb</h1>
  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <x-breadcrumb/>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}<br>

  <!-- example-start-2 -->
  <x-breadcrumb currentPage="Components"/>
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}<br>

  <!-- example-start-3 -->
  <x-breadcrumb currentPage="Breadcrumb" :pages="[
    [
      'link' => [
        'href' => '#',
        'text' => 'Components',
      ]
    ]
  ]"/>
  <!-- example-end-3 -->
  {!! GrepCodeExampleComponents::get(3) !!}<br>

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Breadcrumb',
    'type' => 'components',
    'text' => '<code>lbc/components/breadcrumb.blade.php</code>',
    'variables' => [
      [
        'name' => 'data',
        'type' => 'array',
        'default' => '',
        'description' => 'Submit all data.',
      ],[
        'name' => 'class',
        'type' => 'string',
        'default' => '',
        'description' => 'Classes can be added, all other attributes can also be set.',
      ],[
        'name' => 'pages',
        'type' => 'array',
        'default' => '',
        'description' => 'Linked pages for example categories.',
      ],[
        'name' => 'currentPage',
        'type' => 'string',
        'default' => '',
        'description' => 'Current/active page.',
      ],
    ],
  ])
@endsection
