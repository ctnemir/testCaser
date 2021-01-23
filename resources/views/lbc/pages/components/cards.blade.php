@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.';
@endphp

@section('component-content')
  <h1 id="cards">Cards</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  @php
    $card = [
      'header' => [
        'headline' => [
          'class' => 'h6 mb-0',
          'link' => [
            'class' => 'text-body',
            'text' => 'Card Header Headline',
            'href' => '#',
          ],
        ]
      ],
      'image' => [
        'src' => 'https://via.placeholder.com/253x169',
        'alt' => 'Card Image',
      ],
      'body' => [
        'text' => 'Card Body Text',
        'headline' => [
          'class' => 'h5',
          'link' => [
            'text' => 'Card Body Headline',
            'href' => '#',
          ],
        ],
      ],
      'footer' => [
        'text' => 'Card Footer Text',
      ]
    ]
  @endphp

  <div class="row mt-5">
    <div class="col-md-6 col-xl-4">
      <x-card class="mb-3">
        <x-slot name="header">
          <x-headline class="h6 mb-0">
            <x-link class="text-body" text="Card Header Headline" href="#"/>
          </x-headline>
        </x-slot>

        <x-slot name="image">
          <x-image class="card-image" src="https://via.placeholder.com/253x169" :width="[253]" :height="[169]"/>
        </x-slot>

        <x-slot name="body">
          <x-headline class="h5">
            <x-link text="Card Body Headline" href="#"/>
          </x-headline>
        </x-slot>

        <x-slot name="footer">
          card Footer Text
        </x-slot>
      </x-card>
    </div>

    <div class="col-md-6 col-xl-4">
      <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :footer="['hide' => true]"/>
    </div>
    <div class="col-md-6 col-xl-4">
      <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :header="['hide' => true]"/>
    </div>
  </div>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <!-- example-start-2 -->
  <div class="row mt-5">
    <div class="col-md-6 col-xl-4">
      <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :image="['hide' => true]"/>
    </div>

    <div class="col-md-6 col-xl-4">
      <x-card :all="$card" class="mb-3" :image="['width' => [253], 'height' => [169]]" :body="['hideText' => true]"/>
    </div>

    <div class="col-md-6 col-xl-4">
      <x-card
        :all="$card"
        class="mb-3"
        :image="['width' => [253], 'height' => [169]]"
        :body="['hide' => true]"
        :header="['hide' => true]"
      />
    </div>
  </div>
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}

  <h3 class="mt-4">Background and color</h3>

  <!-- example-start-3 -->
  @php
    $type = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark']
  @endphp

  @foreach(array_chunk($type, 3) as $chunk)
    <div class="row">
      @foreach($chunk as $item)
        <div class="col-lg-4">
          <x-card
            :class="'text-white bg-' . $item . ' mb-3'"
            :body="[
              'headline' => ['text' => \ucfirst($item) . ' card', 'class' => 'h3'],
              'text' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
            ]"
          />
        </div>
      @endforeach

      @if($loop->last)
        <div class="col-lg-4">
          <x-card
            class="mb-3"
            :overlay="true"
            :image="['src' => 'https://via.placeholder.com/253x172', 'width' => [253, 300], 'height' => [172, 300]]"
            :body="[
              'headline' => ['text' => 'Overlay card with image', 'class' => 'h3 text-white'],
            ]"
          />
        </div>
      @endif
    </div>
  @endforeach
  <!-- example-end-3 -->
  {!! GrepCodeExampleComponents::get(3) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Card',
    'text' => '<code>lbc/components/card.card.blade.php</code><br>Collapse options are integrated.',
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
        'name' => 'header',
        'type' => 'array',
        'default' => '',
        'description' => 'You can fill it with headline and link',
      ], [
        'name' => 'header["class"]',
        'type' => 'string',
        'default' => '',
        'description' => 'Card header custom class',
      ], [
        'name' => 'header["hide"]',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'Hide card header.',
      ], [
        'name' => 'overlay',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'Turn an image into a card background and overlay your card’s text.',
      ], [
        'name' => 'text',
        'type' => 'string',
        'default' => '',
        'description' => 'Card body text',
      ], [
        'name' => 'body',
        'type' => 'array',
        'default' => '',
        'description' => 'You can fill it with text, html or whatever you want.',
      ], [
        'name' => 'body["class"]',
        'type' => 'string',
        'default' => '',
        'description' => 'Card body custom class',
      ], [
        'name' => 'body["hide"]',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'Hide card body.',
      ], [
        'name' => 'footer',
        'type' => 'array',
        'default' => '',
        'description' => 'You can fill it with text, html or whatever you want.',
      ], [
        'name' => 'footer["class"]',
        'type' => 'string',
        'default' => '',
        'description' => 'Card footer custom class',
      ], [
        'name' => 'footer["hide"]',
        'type' => 'boolean',
        'default' => 'false',
        'description' => 'Hide card footer.',
      ],
    ]
  ])
@endsection
