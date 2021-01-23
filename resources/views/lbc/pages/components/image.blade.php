@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples for images, Lazyload and resize/crop-tool are integrated.';
@endphp

@section('component-content')
  <h1 id="image">Image</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <div class="row">
    <div class="col-md-6 col-xl-4">
      <x-image class="img-fluid mb-3" src="https://via.placeholder.com/255" />
    </div>

    <div class="col-md-6 col-xl-4">
      <x-image class="img-thumbnail mb-3" src="https://via.placeholder.com/255" :width="[255]" />
    </div>

    <div class="col-md-6 col-xl-4">
      <x-image class="rounded-circle mb-3 shadow-lg" src="https://via.placeholder.com/255" :width="[255]" />
    </div>
  </div>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}<br>

  <!-- example-start-2 -->
  <x-image class="rounded-circle img-thumbnail" src="https://via.placeholder.com/340" :width="[340]" />
  <x-image class="rounded img-thumbnail ml-3 mb-3 shadow-sm" src="https://via.placeholder.com/180" :width="[180]" />
  <x-image class="rounded ml-3 mb-3" src="https://via.placeholder.com/120" :width="[120]" />
  <x-image class="rounded ml-3 mb-3" src="https://via.placeholder.com/80" :width="[80]" />
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}<br>

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Images',
    'type' => 'content',
    'text' => '<code>components/image.blade.php</code>',
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
        'name' => 'width',
        'type' => 'array',
        'default' => '',
        'description' => 'Image resize width for desktop and mobile :width="[100, 50]".',
      ],[
        'name' => 'height',
        'type' => 'array',
        'default' => '',
        'description' => 'Image resize height for desktop and mobile :height="[100, 50]".',
      ],[
        'name' => 'lazyload',
        'type' => 'boolean',
        'default' => 'true',
        'description' => 'Enabled or disabled lazy laod. You can also globally turn lazyload on and off',
      ],
    ],
  ])
@endsection
