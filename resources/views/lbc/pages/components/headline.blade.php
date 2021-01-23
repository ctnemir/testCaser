@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples with links.';
@endphp

@section('component-content')
  <h1 id="headline">Headline</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <x-headline tag="h1" text="Headline Example #1"/>
  <x-headline :all="[
    'tag' => 'h2',
    'link' => [
      'href' => '#',
      'title' => 'Title Headline Example #2',
      'text' => 'Headline Example #2',
    ]
  ]"/>
  <x-headline tag="h3" text="Headline Example #3"/>
  <x-headline tag="h4" text="Headline Example #4"/>
  <x-headline tag="h5" text="Headline Example #5"/>
  <x-headline tag="h6" text="Headline Example #6"/>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Headline',
    'text' => '<code>components/headline.blade.php</code>',
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
        'name' => 'tag',
        'type' => 'string',
        'default' => '',
        'description' => 'HTML tag',
      ], [
        'name' => 'text',
        'type' => 'string',
        'default' => '',
        'description' => 'Headline content',
      ], [
        'name' => 'trim',
        'type' => 'int',
        'default' => 0,
        'description' => 'Trim the text.',
      ]
  ]])
@endsection
