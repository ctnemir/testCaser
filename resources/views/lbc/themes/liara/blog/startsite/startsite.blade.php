@extends('lbc.themes.liara.blog.base')

@php
  $bodyClass = 'view-blog';
@endphp

@section('page-header')
  <h1 class="text-center my-3 my-lg-4 display-4">
    <small>Blog</small><br>
    Honey, do we need another <br>wi-fi cable?
  </h1>
@endsection

@section('page-content')
  <div class="container font-size-lg">
    @if($data['pagination']->currentPage() == 1)
      <x-media
        :all="$data['posts'][7]"
        class="mb-3 mb-lg-4 d-block d-lg-flex"
        :image="[
          'class' => 'align-self-center ml-lg-3 order-1 rounded img-fluid',
          'width' => [680]
        ]"
        :excerpt="['show' => true]"
        :body="[
          'class' => 'align-self-center order-0',
        ]"
        :headline="[
          'tag' => 'h1',
          'link' => [
            'class' => 'text-body',
          ]
        ]">
        @include('lbc.themes.liara.blog.snippets.post-meta', $data['posts'][7])
      </x-media>
    @endif

    @foreach(\array_chunk($data['pagination']->items(), 6) as $chunk)
      <div class="row">
        @foreach($chunk as $post)
          <div class="col-md-4">
            <x-card
              :all="$post"
              class="mb-3 mb-lg-4"
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
