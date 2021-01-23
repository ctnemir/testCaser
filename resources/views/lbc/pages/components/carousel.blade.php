@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'A slideshow component for cycling through elements—images or slides of text—like a carousel.';
@endphp

@section('component-content')
  <h1 id="carousel">Carousel</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <x-carousel id="carousel-1" :indicators="true" :control="true" class="mb-3" :items="[
    ['image' => ['src' => 'https://via.placeholder.com/825x400', 'lazyload' => false]],
    ['image' => ['src' => 'https://via.placeholder.com/825x400', 'lazyload' => false]],
  ]"/>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <h3 class="mt-4">Carousel with Slots</h3>

  <!-- example-start-2 -->
  <x-carousel id="carousel-2" :indicators="true" :control="true" class="mb-3">
    <x-slot name="slot_1">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src="https://via.placeholder.com/825x400"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 1</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_2">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src="https://via.placeholder.com/825x400"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 2</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_3">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src="https://via.placeholder.com/825x400"/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 3</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>
  </x-carousel>
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Carousel',
    'text' => '<code>lbc/components/carousel.blade.php</code>',
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
        'name' => 'indicators',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'You can hide or show the indicators.',
      ],[
        'name' => 'control',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'You can hide the controls.',
      ],[
        'name' => 'items',
        'type' => 'array',
        'default' => '',
        'description' => 'You can fill it with images.',
      ],[
        'name' => 'slot(x)',
        'type' => 'string',
        'default' => '',
        'description' => 'You can fill it with text, html or whatever you want.',
      ],
    ]
  ])
@endsection
