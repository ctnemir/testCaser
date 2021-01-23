@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'This component is perfect for the bootstrap icons library, but of course also for all other types of SVG´s. See on <a href="https://icons.getbootstrap.com/">https://icons.getbootstrap.com/</a>';
@endphp

@section('component-content')
  <h1 id="alerts">SVG</h1>

  <h2 class="font-weight-lighter mb-5">{!! $data['meta']['description'] !!}</h2>

  <!-- example-start-1 -->
  <x-svg
    class="bi bi-alarm-fill mr-3"
    :width="[40]"
    :height="[40]"
    path="M5.5.5A.5.5 0 016 0h4a.5.5 0 010 1H9v1.07a7.002 7.002 0 013.537 12.26l.817.816a.5.5 0 01-.708.708l-.924-.925A6.967 6.967 0 018 16a6.967 6.967 0 01-3.722-1.07l-.924.924a.5.5 0 01-.708-.708l.817-.816A7.002 7.002 0 017 2.07V1H5.999a.5.5 0 01-.5-.5zM.86 5.387A2.5 2.5 0 114.387 1.86 8.035 8.035 0 00.86 5.387zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 013.527 3.527A2.5 2.5 0 0013.5 1zm-5 4a.5.5 0 00-1 0v3.882l-1.447 2.894a.5.5 0 10.894.448l1.5-3A.5.5 0 008.5 9V5z"
  />

  <x-svg class="bi bi-alarm mr-3" :width="[70]" :height="[70]">
    <path fill-rule="evenodd" d="M8 15A6 6 0 108 3a6 6 0 000 12zm0 1A7 7 0 108 2a7 7 0 000 14z" clip-rule="evenodd"/>
    <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v4a.5.5 0 01-.053.224l-1.5 3a.5.5 0 11-.894-.448L7.5 8.882V5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
    <path d="M.86 5.387A2.5 2.5 0 114.387 1.86 8.035 8.035 0 00.86 5.387zM11.613 1.86a2.5 2.5 0 113.527 3.527 8.035 8.035 0 00-3.527-3.527z"/>
    <path fill-rule="evenodd" d="M11.646 14.146a.5.5 0 01.708 0l1 1a.5.5 0 01-.708.708l-1-1a.5.5 0 010-.708zm-7.292 0a.5.5 0 00-.708 0l-1 1a.5.5 0 00.708.708l1-1a.5.5 0 000-.708zM5.5.5A.5.5 0 016 0h4a.5.5 0 010 1H6a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
    <path d="M7 1h2v2H7V1z"/>
  </x-svg>

  <x-svg
      class="bi bi-backspace-reverse-fill"
      :width="[100]"
      :height="[100]"
      path="M0 3a2 2 0 012-2h7.08a2 2 0 011.519.698l4.843 5.651a1 1 0 010 1.302L10.6 14.3a2 2 0 01-1.52.7H2a2 2 0 01-2-2V3zm9.854 2.854a.5.5 0 00-.708-.708L7 7.293 4.854 5.146a.5.5 0 10-.708.708L6.293 8l-2.147 2.146a.5.5 0 00.708.708L7 8.707l2.146 2.147a.5.5 0 00.708-.708L7.707 8l2.147-2.146z"
  />
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Alert',
    'text' => '<code>lbc/components/alert.blade.php</code>',
    "usage" => "<code>@include('lbc/components/alert')</code>",
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
        'name' => 'path',
        'type' => 'string',
        'default' => '',
        'description' => 'Insert the svg path',
      ],[
        'name' => 'width',
        'type' => 'array',
        'default' => '',
        'description' => 'Svg width for desktop and mobile :width="[100, 50]".',
      ],[
        'name' => 'height',
        'type' => 'array',
        'default' => '',
        'description' => 'Svg height for desktop and mobile :height="[100, 50]".',
      ]
    ]
  ])
@endsection
