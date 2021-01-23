@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.';
@endphp

@section('component-content')
  <h1 id="toasts">Toasts</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <!-- example-start-1 -->
  <x-alert class="mt-3 mt-lg-5" type="info" message="Coming soon."/>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Toasts',
    'type' => 'components',
    'variables' => [
        [
            'name' => '',
            'type' => '',
            'default' => '',
            'description' => '',
        ],
    ],
  ])
@endsection
