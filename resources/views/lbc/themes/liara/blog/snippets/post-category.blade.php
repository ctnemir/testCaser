<ul class="post-category list-inline {{ $class ?? '' }}">
  @foreach($category as $tag)
    <li class="list-inline-item">
      <a class="btn btn-light btn-sm" href="{{ $tag['link']['href'] }}">
        {{ $tag['link']['text'] }}
      </a>
    </li>
  @endforeach
</ul>
