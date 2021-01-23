@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples for links.';
@endphp

@section('component-content')
  <h1 id="link">Link</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  @php
    $names = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']
  @endphp

  <ul class="list-inline">
    @foreach ($names as $item)
      <li class="list-inline-item">
        <x-link :class="'btn btn-' . $item" href="#" :text="ucfirst($item)"/>
      </li>
    @endforeach
  </ul>

  <ul class="list-inline">
    @foreach ($names as $item)
      <li class="list-inline-item">
        <x-link :class="'btn btn-outline-' . $item" href="#" :text="ucfirst($item)"/>
      </li>
    @endforeach
  </ul>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}<br>

  <!-- example-start-2 -->
  <ul class="list-inline">
    <li class="list-inline-item">
      <x-link class="btn btn-link" href="#" text="Link"/>
    </li>

    <li class="list-inline-item">
      <x-link href="#" text="Without btn classes"/>
    </li>

    <li class="list-inline-item">
      <x-link class="btn btn-primary disabled" href="#" text="disabled"/>
    </li>

    <li class="list-inline-item">
      <x-link class="btn btn-primary btn-sm" href="#" text="btn-sm"/>
    </li>

    <li class="list-inline-item">
      <x-link class="btn btn-primary btn-lg" href="#" text="btn-lg"/>
    </li>
  </ul>
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}<br>

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Link',
    'text' => '<code>components/link.blade.php</code>',
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
        'name' => 'trim',
        'type' => 'int',
        'default' => 0,
        'description' => 'Trim the text.',
      ],[
        'name' => 'text',
        'type' => 'string',
        'default' => '',
        'description' => 'Link content',
      ]
    ],
  ])
@endsection
