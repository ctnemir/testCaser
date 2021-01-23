@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio that scales on any device.';
@endphp

@section('component-content')
  <h1 id="embed">Embed</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <div class="row">
    <div class="col-4">
      <h3>21by9</h3>
      <x-embed src="https://www.youtube.com/embed/1La4QzGeaaQ" format="21by9"/>
    </div>

    <div class="col-4">
      <h3>16by9</h3>
      <x-embed src="https://www.youtube.com/embed/1La4QzGeaaQ"/>
    </div>

    <div class="col-4">
      <h3>4by3</h3>
      <x-embed src="https://www.youtube.com/embed/1La4QzGeaaQ" format="4by3"/>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <h3>1by1</h3>
      <x-embed src="https://www.youtube.com/embed/1La4QzGeaaQ" format="1by1"/>
    </div>
  </div>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}<br>

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Embed',
    'type' => 'utilities',
    'text' => '<code>components/embed.blade.php</code>',
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
        'name' => 'src',
        'type' => 'string',
        'default' => '',
        'description' => '',
      ],[
        'name' => 'format',
        'type' => 'string',
        'default' => '',
        'description' => '',
      ],[
        'name' => 'options',
        'type' => 'string',
        'default' => '',
        'description' => '',
      ],
    ],
  ])
@endsection
