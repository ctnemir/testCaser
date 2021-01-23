@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Dropdown navigation with the popular effect from stripe.com.';
@endphp

@section('component-content')
  <h1 id="collapse">Stripe Nav</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>


  <h3>Stripe Nav example</h3>

  <!-- example-start-1 -->
  <x-stripe-nav class="mb-4" :links="[
    [
      'class' => 'text-stripe-100 font-size-lg font-weight-bolder',
      'title' => 'LOGO',
      'href' => '#',
    ],
    [
      'title' => 'Dropdown',
      'slot' => 'slot1',
    ],
    [
      'title' => 'Dropdown',
      'slot' => 'slot2',
    ],
    [
      'title' => 'Dropdown',
      'slot' => 'slot3',
    ],
    [
      'title' => 'Link',
      'href' => '#',
    ],
    [
      'class' => 'ml-md-auto',
      'title' => 'Link',
      'href' => '#',
    ],
  ]">
    <x-slot name="slot1">
      <div class="px-4 py-3"{!! $agent->isMobile() ? '' : ' style="width:320px"' !!}>
        <h6 class="font-weight-bold text-uppercase mt-2">Dropdown</h6>
        <div class="row">
          <div class="col-6">
            <ul class="nav flex-column">
              <li class="nav-item">
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <ul class="nav flex-column">
              <li class="nav-item">
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-slot>

    <x-slot name="slot2">
      <div class="px-4 py-3"{!! $agent->isMobile() ? '' : ' style="width:480px"' !!}>
        <h6 class="font-weight-bold text-uppercase mt-2">Dropdown</h6>
        <div class="row">
          <div class="col-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
              </li>
            </ul>
          </div>
          <div class="col-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
              </li>
            </ul>
          </div>
          <div class="col-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
                <x-link class="nav-link" href="#" text="Link"/>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-slot>

    <x-slot name="slot3">
      <div class="px-4 py-3">
        <h6 class="font-weight-bold text-uppercase mt-2">Dropdown</h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <x-link class="nav-link" href="#" text="Link"/>
            <x-link class="nav-link" href="#" text="Link"/>
            <x-link class="nav-link" href="#" text="Link"/>
            <x-link class="nav-link" href="#" text="Link"/>
          </li>
        </ul>
      </div>
    </x-slot>
  </x-stripe-nav>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Stripe-Nav',
    'text' => '<code>lbc/components/stripe-nav.blade.php</code>',
    'type' => null,
    'variables' => [
      [
        'name' => 'all',
        'type' => 'array',
        'default' => '',
        'description' => 'Submit all data.',
      ],[
        'name' => 'slot(x)',
        'type' => 'string',
        'default' => '',
        'description' => 'You can fill it with text, html or whatever you want. Unlimited slots can be use',
      ],[
        'name' => 'slot',
        'type' => 'string',
        'default' => '',
        'description' => 'Definition of the slots',
      ],[
        'name' => 'class',
        'type' => 'string',
        'default' => 'stripe-nav',
        'description' => 'Classes can be added, all other attributes can also be set.',
      ],[
        'name' => 'title',
        'type' => 'string',
        'default' => '',
        'description' => 'Link title, dropdown title',
      ],
    ]
  ])
@endsection
