@extends('lbc/pages/examples/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleExamples;

  $data['meta']['description'] = 'Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.';
@endphp

@section('page-content')
  <!-- example-start-1 -->
  <header>
    <div class="bg-dark collapse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <x-headline class="text-white" text="About" tag="h4"/>

            <p class="text-muted">
              Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.
            </p>
          </div>

          <div class="col-sm-4 offset-md-1 py-4">
            <x-headline class="text-white" text="Contact" tag="h4"/>

            <ul class="list-unstyled">
              <li>
                <x-link class="text-white" text="Follow on Twitter" href="#"/>
              </li>
              <li>
                <x-link class="text-white" text="Like on Facebook" href="#"/>
              </li>
              <li>
                <x-link class="text-white" text="Email me" href="#"/>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- Navbar coming soon --}}
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
            <circle cx="12" cy="13" r="4"></circle>
          </svg>

          <strong>Album</strong>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <section class="jumbotron text-center">
    <div class="container">
      <x-headline class="jumbotron-heading" text="Album example" tag="h1"/>

      <p class="lead text-muted">
        Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.
      </p>

      <p>
        <x-link class="btn btn-primary my-2" text="Main call to action" href="#"/>
        <x-link class="btn btn-secondary my-2" text="Secondary action" href="#"/>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @for($i = 0; $i < 9; $i++)
          <div class="col-md-4">
            <x-card class="mb-4 shadow-sm">
              <x-slot name="image">
                <x-image src="https://via.placeholder.com/348x255/55595c/ffffff/?text=Thumbnail"/>
              </x-slot>

              <x-slot name="body">
                <x-headline text="This is a title"/>

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                  <small class="text-muted">9 mins</small>
                </div>
              </x-slot>
            </x-card>
          </div>
        @endfor
      </div>
    </div>
  </div>
  <!-- example-end-1 -->

  {!! GrepCodeExampleExamples::get(1) !!}
@endsection
