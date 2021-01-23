@php
  $image = [
    'src' => $author['image']['src'],
    'class' => 'rounded-circle',
    'width' => [60, 30],
  ]
@endphp

<div class="media {{ $class ?? 'mb-3' }}">
  @isset($author['image'])
    @if(isset($author['link']['href']))
      <a class="mr-1 mr-md-2" href="{{ $author['link']['href'] }}" title="{{ $author['title'] }}">
        <x-image :all="$image"/>
      </a>
    @else
      <x-image :all="$image" class="rounded-circle mr-2"/>
    @endif
  @endisset

  <div class="media-body">
    <div class="d-inline-block rounded bg-lighter p-2 mb-1">
      {!! $text ?? '' !!}
    </div>

    <div class="small pl-2 d-flex">
      <div class="post-comments-author">
        {{ $author['title'] ?? '' }}
      </div>

      <time class="post-meta-publishedDate" datetime="{{ date('Y-m-d H:i:s', strtotime($publishedDate)) }}">
        {{ $publishedDate }}
      </time>

      <a class="ml-auto btn btn-outline-primary btn-sm mt-1" onclick="this.innerHTML=this.innerHTML[0]==='R'?'Cancel reply':'Reply'" href="#collapseComment_{{ $loopIndex }}" data-toggle="collapse">Reply</a>
    </div>


    <div class="collapse px-2" id="collapseComment_{{ $loopIndex }}" style="transition:0.1s">
      @include('lbc.themes.liara.blog.post.snippets.comments.comment-form', [
        'loopIndex' => $loopIndex,
      ])
    </div>

    @if(!empty($comments))
      @foreach($comments as $comment)
        @include('lbc.themes.liara.blog.post.snippets.comments.comment', array_merge($comment, [
            'class' => 'mt-3',
            'loopIndex' => $loopIndex . '_' . $loop->index,
        ]))
      @endforeach
    @endif
  </div>
</div>
