@extends('lbc.themes.liara.blog.base')

@php
  $bodyClass = 'view-post';
@endphp

@section('page-header')
  <div class="container mt-3 mt-lg-4 font-size-lg">
    <h1 class="mb-3 display-4">
      {{ $data['post']['headline']['text'] ?? '' }}
    </h1>

    <div class="d-lg-flex align-items-center mb-3">
      @include('lbc.themes.liara.blog.snippets.post-meta', $data['post'], [
        'class' => 'mr-lg-3 mb-2 mb-lg-0'
      ])

      @include('lbc.themes.liara.blog.snippets.post-category', $data['post'], [
        'class' => 'mb-lg-0'
      ])

      @include('lbc.themes.liara.components.social-share', [
          'class' => 'ml-lg-auto'
      ])
    </div>

    <figure class="mb-3 mb-2">
      <x-image :all="$data['post']['image']" class="rounded img-fluid" :width="[1110, 510]" :height="[624]"/>
    </figure>
  </div>
@endsection

@section('page-content')
  <div class="container mb-3 mb-lg-4">
    <div class="post-content mb-3 mb-lg-4 font-size-lg">
      <div class="lead mb-3">
        {!! $data['post']['excerpt']['text'] !!}
      </div>

      {!! $data['post']['text'] !!}

      <div class="d-lg-flex mb-3">
        @include('lbc.themes.liara.blog.snippets.post-category', $data['post'])

        @include('lbc.themes.liara.components.social-share', [
          'class' => 'ml-auto'
        ])
      </div>

      <div class="bg-gray-100 p-3 mb-4 rounded d-none d-md-block">
        @include('lbc.themes.liara.blog.post.snippets.author-box', $data['post'])
      </div>
    </div>

    @include('lbc.themes.liara.blog.snippets.post-related-posts', [
      'class' => 'ml-auto'
    ])

    @include('lbc.themes.liara.blog.post.snippets.comments.comments', $data)
  </div>
@endsection
