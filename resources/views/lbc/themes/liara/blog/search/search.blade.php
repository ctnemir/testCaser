@extends('lbc.themes.liara.blog.base')

@php
  $bodyClass = 'view-blog';
@endphp

@section('page-header')
  <h1 class="text-center mt-5 mb-4 display-4">
    <small>Search result for:</small><br>
    {{ $data['title'] }}
  </h1>
  <hr class="mb-4">
@endsection

@section('page-content')
  <div class="container font-size-lg">
    @foreach(\array_chunk($data['pagination']->items(), 6) as $chunk)
      <div class="row">
        @foreach($chunk as $post)
          <div class="col-md-4">
            <x-card
              :all="$post"
              class="mb-4"
              :image="[
                'width' => [350],
                'height' => [233]
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
        class="justify-content-center mt-3 mb-5"
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
