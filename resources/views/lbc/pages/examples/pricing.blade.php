@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleExamples;

  $data['meta']['description'] = 'Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.';
@endphp

@section('page-content')
  <!-- example-start-1 -->

  @push('head')
    <style>
      html {
        font-size: 14px;
      }

      @media (min-width: 768px) {
        html {
          font-size: 16px;
        }
      }

      .container {
        max-width: 960px;
      }

      .pricing-header {
        max-width: 700px;
      }

      .card-deck .card {
        min-width: 220px;
      }
    </style>
  @endpush

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <x-headline class="my-0 mr-md-auto font-weight-normal" tag="h5" text="Company name"/>

    <nav class="my-2 my-md-0 mr-md-3">
      @php
        $example = [
          [
            'class' => 'p-2 text-dark',
            'text' => 'Features',
            'href' => '#',
          ],
          [
            'class' => 'p-2 text-dark',
            'text' => 'Enterprise',
            'href' => '#',
          ],
          [
            'class' => 'p-2 text-dark',
            'text' => 'Support',
            'href' => '#',
          ],
          [
            'class' => 'p-2 text-dark',
            'text' => 'Pricing',
            'href' => '#',
          ],
        ]
      @endphp

      @foreach($example as $item)
        <x-link :all="$item"/>
      @endforeach
    </nav>

    <x-link class="btn btn-outline-primary" text="Sign up" href="#"/>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <x-headline class="display-4" text="Pricing" tag="h1"/>

    <p class="lead">
      Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.
    </p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <x-card class="mb-4 shadow-sm">
        <x-slot name="header">
          <x-headline class="my-0 font-weight-normal" text="Free"/>
        </x-slot>

        <x-slot name="body">
          <x-headline class="pricing-card-title" text="$0 <small class='text-muted'>/ mo</small>"/>

          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </x-slot>
      </x-card>

      <x-card class="mb-4 shadow-sm">
        <x-slot name="header">
          <x-headline class="my-0 font-weight-normal" text="Pro"/>
        </x-slot>

        <x-slot name="body">
          <x-headline class="pricing-card-title" text="$15 <small class='text-muted'>/ mo</small>"/>

          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
        </x-slot>
      </x-card>

      <x-card :all="[
        'class' => 'mb-4 shadow-sm',
        'header' => [
          'headline' => [
            'class' => 'my-0 font-weight-normal',
            'text' => 'Enterprice'
          ]
        ],
        'body' => [
          'headline' => [
            'class' => 'pricing-card-title',
            'text' => '$0 <small class=\'text-muted\'>/ mo</small>'
          ]
        ]
      ]">
        <x-slot name="body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>29 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Contact us</button>
        </x-slot>
      </x-card>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row  text-small">
        <div class="col-6 col-md">
          <h5>Features</h5>
          @php
            $example = [
              [
                'class' => 'text-muted',
                'text' => 'Cool stuff',
                'href' => '#',
              ],
              [
                'class' => 'text-muted',
                'text' => 'Random feature',
                'href' => '#',
              ],
              [
                'class' => 'text-muted',
                'text' => 'Team feature',
                'href' => '#',
              ],
              [
                'class' => 'text-muted',
                'text' => 'Stuff for developers',
                'href' => '#',
              ],
              [
                'class' => 'text-muted',
                'text' => 'Another one',
                'href' => '#',
              ],
              [
                'class' => 'text-muted',
                'text' => 'Last time',
                'href' => '#',
              ],
            ]
          @endphp

          <ul class="list-unstyled">
            @foreach($example as $item)
              <li>
                <x-link :all="$item"/>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="col-6 col-md">
          <h5>Resources</h5>
          @php
            $example = [
              [
                'text' => 'Resource',
                'href' => '#',
              ],
              [
                'text' => 'Resource name',
                'href' => '#',
              ],
              [
                'text' => 'Another resource',
                'href' => '#',
              ],
              [
                'text' => 'Final resource',
                'href' => '#',
              ],
            ]
          @endphp

          <ul class="list-unstyled">
            @foreach($example as $item)
              <li>
                <x-link :all="$item" class="text-muted"/>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="col-6 col-md">
          <h5>About</h5>
          @php
            $example = [
              [
                'text' => 'Team',
                'href' => '#',
              ],
              [
                'text' => 'Locations',
                'href' => '#',
              ],
              [
                'text' => 'Privacy',
                'href' => '#',
              ],
              [
                'text' => 'Terms',
                'href' => '#',
              ],
            ]
          @endphp

          <ul class="list-unstyled">
            @foreach($example as $item)
              <li>
                 <x-link :all="$item" class="text-muted"/>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <!-- example-end-1 -->

  {!! GrepCodeExampleExamples::get(1) !!}
@endsection
