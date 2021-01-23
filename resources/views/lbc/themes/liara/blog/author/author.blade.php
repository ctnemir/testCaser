@extends('lbc.themes.liara.blog.base')

@php
  $bodyClass = 'view-author';
@endphp

@section('page-header')
  <h1 class="text-hide">
    Author: {{ $data['author']['link']['text']  }}
  </h1>
  <div class="container">
    <div class="p-lg-4">
      @include('lbc.themes.liara.blog.post.snippets.author-box', $data)
    </div>
  </div>

  <hr class="mb-3 mb-lg-4">
@endsection

@section('page-content')
  <div class="container font-size-lg">
    <h2 class="mb-3">All articles from {{ $data['author']['link']['text'] }}:</h2>

    @foreach(\array_chunk($data['pagination']->items(), 6) as $chunk)
      <div class="row">
        @foreach($chunk as $post)
          <div class="col-md-4">
            <x-card
                :all="$post"
                class="mb-3 mb-lg-4"
                :image="[
                'width' => [350, 510],
              ]"
                :body="[
                'headline' => [
                  'tag' => 'h4',
                  'link' => [
                    'href' => $post['headline']['link']['href'],
                    'text' => $post['headline']['link']['text'],
                    'class' => 'text-body',
                  ]
                ]
              ]">
              <x-slot name="body">
                @include('lbc.themes.liara.blog.snippets.post-meta', $post)
              </x-slot>
            </x-card>
          </div>
        @endforeach
      </div>
    @endforeach

    @if($data['pagination']->lastPage() > 1)
      <x-pagination
          class="justify-content-center mb-3 mb-lg-4"
          :current="$data['pagination']->currentPage()"
          :total="$data['pagination']->total()"
          :next="[
          'href' => $data['pagination']->nextPageUrl(),
        ]"
          :prev="[
          'href' => $data['pagination']->previousPageUrl(),
        ]"
          :pages="$data['pagination']->lastPage()"
      />
    @endif
  </div>
@endsection
