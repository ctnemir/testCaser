@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples for Bootstrap’s media object to construct highly repetitive components like blog comments, tweets, and the like.';
@endphp

@section('component-content')
  <h1 id="media">Media object</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <x-media
    class="mb-4"
    :image="[
      'class' => 'mr-3 order-0',
      'src' => 'https://via.placeholder.com/100x100',
      'width' => [100]
    ]"
    :body="[
      'class' => 'order-1'
    ]"
    :headline="[
      'link' => [
        'text' => 'Lorem ipsum dolor sit amet',
        'href' => '#',
      ]
    ]"
    text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
  />
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}<br>

  <!-- example-start-2 -->
  <x-media
    class="mb-4"
    :image="[
      'class' => 'align-self-center mr-3 order-0',
      'src' => 'https://via.placeholder.com/100x100',
      'width' => [100]
    ]"
    :body="[
      'class' => 'order-0'
    ]"
    :headline="[
      'tag' => 'h5',
      'link' => [
        'class' => 'text-body',
        'text' => 'Lorem ipsum dolor sit amet',
        'href' => '#',
      ]
    ]"
    text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
  />
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}<br>

  <!-- example-start-3-->
  @php
    $media = [
      'class' => 'mb-4',
      'image' => [
        'class' => 'align-self-end mr-3 order-0',
        'src' => 'https://via.placeholder.com/100x100',
        'width' => [100],
      ],
      'headline' => [
        'link' => [
          'class' => 'text-body',
          'text' => 'Lorem ipsum dolor sit amet',
          'href' => '#',
        ],
      ],
      'body' => [
        'class' => 'order-1',
      ],
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
    ]
  @endphp

  <x-media :all="$media"/>
  <!-- example-end-3 -->
  {!! GrepCodeExampleComponents::get(3) !!}<br>

  <!-- example-start-4 -->
  @php
    $media = [
      'image' => [
        'src' => 'https://via.placeholder.com/100x100',
      ],
      'headline' => ['text' => 'Lorem ipsum dolor sit amet'],
      'link' => [
        'url' => '#',
      ],
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
    ]
  @endphp
  <x-media
    class="mb-4"
    :image="[
      'class' => 'align-self-center ml-3 order-1',
      'src' => 'https://via.placeholder.com/100x100',
      'width' => [100],
    ]"
    :body="[
      'class' => 'order-0'
    ]"
    :headline="[
      'tag' => 'h5',
      'link' => [
        'class' => 'text-body',
        'text' => 'Lorem ipsum dolor sit amet',
        'href' => '#',
      ]
    ]"
    text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
  />
  <!-- example-end-4 -->
  {!! GrepCodeExampleComponents::get(4) !!}<br>

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Media-object',
    'text' => '<code>components/media.blade.php</code>',
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
        'name' => 'image',
        'type' => 'array',
        'default' => '',
        'description' => 'All image definitions.',
      ],[
        'name' => 'headline',
        'type' => 'array',
        'default' => '',
        'description' => 'All headline definitions.',
      ],[
        'name' => 'body',
        'type' => 'array',
        'default' => '',
        'description' => 'Set body div attributes.',
      ],[
        'name' => 'text',
        'type' => 'string',
        'default' => '',
        'description' => 'Media body content, html is allowed.',
      ],
    ]
  ])
@endsection
