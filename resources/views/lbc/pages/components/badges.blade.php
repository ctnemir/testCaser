@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Documentation and examples for badges, bootstrap`s small count and labeling component.';
@endphp

@section('component-content')
  <h1 id="badges">Badges</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <h3 class="mt-4">Contextual variations</h3>
  <p>
    Add any of the below mentioned modifier classes to
    change the appearance of a badge.
  </p>

  <!-- example-start-1 -->
  <x-badge type="primary" text="Primary"/>
  <x-badge type="secondary" text="Secondary"/>
  <x-badge type="danger" text="Danger"/>
  <x-badge type="warning" text="Warning"/>
  <x-badge type="info" text="Info"/>
  <x-badge type="light" text="Light"/>
  <x-badge type="dark" text="Dark"/>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <h3 class="mt-4">Pill badges</h3>
  <p>Use the <code class="highlighter-rouge">.badge-pill</code> modifier class
    to make badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
    and additional horizontal <code class="highlighter-rouge">padding</code>).
    Useful if you miss the badges from v3.</p>

  <!-- example-start-2 -->
  @php
    $withLinks = [[
        'type' => 'primary',
        'link' => [
          'href' => '#',
          'text' => 'Primary',
        ],
      ],[
        'type' => 'secondary',
        'link' => [
          'href' => '#',
          'text' => 'Secondary',
        ],
      ],[
        'type' => 'success',
        'link' => [
          'href' => '#',
          'text' => 'Success',
        ],
      ],[
        'type' => 'danger',
        'link' => [
          'href' => '#',
          'text' => 'Danger',
        ],
      ],[
        'type' => 'warning',
        'link' => [
          'href' => '#',
          'text' => 'Warning',
        ],
      ],[
        'type' => 'info',
        'link' => [
          'href' => '#',
          'text' => 'Info',
        ],
      ],[
        'type' => 'light',
        'link' => [
          'href' => '#',
          'text' => 'Light',
        ],
      ],[
        'type' => 'dark',
        'link' => [
        'href' => '#',
        'text' => 'Dark',
      ],
    ]]
  @endphp

  @foreach ($withLinks as $badge)
    <x-badge :all="$badge" variant="pill" />
  @endforeach
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}

  <h3 class="mt-4">Badges as links</h3>
  <p>Use the <code class="highlighter-rouge">.badge-pill</code> modifier class
    to make badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
    and additional horizontal <code class="highlighter-rouge">padding</code>).
    Useful if you miss the badges from v3.</p>

  <!-- example-start-3 -->
  @php
    $withLinks = [[
        'type' => 'primary',
        'link' => [
          'href' => '#',
          'text' => 'Primary',
        ],
      ],[
        'type' => 'secondary',
        'link' => [
          'href' => '#',
          'text' => 'Secondary',
        ],
      ],[
        'type' => 'success',
        'link' => [
          'href' => '#',
          'text' => 'Success',
        ],
      ],[
        'type' => 'danger',
        'link' => [
          'href' => '#',
          'text' => 'Danger',
        ],
      ],[
        'type' => 'warning',
        'link' => [
          'href' => '#',
          'text' => 'Warning',
        ],
      ],[
        'type' => 'info',
        'link' => [
          'href' => '#',
          'text' => 'Info',
        ],
      ],[
        'type' => 'light',
        'link' => [
          'href' => '#',
          'text' => 'Light',
        ],
      ],[
        'type' => 'dark',
        'link' => [
        'href' => '#',
        'text' => 'Dark',
      ],
    ]]
  @endphp

  @foreach ($withLinks as $badge)
    <x-badge :all="$badge" />
  @endforeach
  <!-- example-end-3 -->
  {!! GrepCodeExampleComponents::get(3) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Badge',
    'text' => '<code>lbc/components/badge.blade.php</code>',
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
        'name' => 'type',
        'type' => 'string',
        'default' => '',
        'description' => 'Badge class/type <br><code>primary, secondary, success, danger, warning, info, light, dark</code>.',
      ],[
        'name' => 'link',
        'type' => 'array',
        'default' => '',
        'description' => 'Badge width a-tag.',
      ],[
        'name' => 'text',
        'type' => 'string',
        'default' => '',
        'description' => 'Badge content and html is disallowed.',
      ],
    ],
  ])
@endsection
