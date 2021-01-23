@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.';
@endphp

@section('component-content')
  <h1 id="alerts">Alerts</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
    <x-alert type="primary" :dismissible="'true'">
      A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="secondary" :dismissible="'true'">
      A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="success" :dismissible="'true'">
      A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="danger" :dismissible="'true'">
      A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="warning" :dismissible="'true'">
      A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="info" :dismissible="'true'">
      A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="light" :dismissible="'true'">
      A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>

    <x-alert type="dark" :dismissible="'true'">
      A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </x-alert>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <!-- example-start-2 -->
  <x-alert class="mt-3" type="primary">
    <div class="row">
      <div class="col-sm-6">A simple primary alert with an example link. Give
        it a click if you like.
      </div>
      <div class="col-sm-6">A simple primary alert with an example link. Give
        it a click if you like.
      </div>
    </div>
  </x-alert>

  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}

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
        'name' => 'type',
        'type' => 'string',
        'default' => '',
        'description' => 'Alert class/type <br><code>primary, secondary, success, danger, warning, info, light, dark</code>.',
      ],[
        'name' => 'message',
        'type' => 'string',
        'default' => '',
        'description' => 'Alert content and html is allowed.',
      ],
    ]
  ])
@endsection
