<div class="post-meta d-flex {{ $class ?? '' }}">
  <x-image
    :src="$author['image']['src']"
    class="post-meta-author-image rounded-circle"
    :width="[48]"
  />

  <div class="post-meta-body">
    <h6 class="post-meta-title">
      <a class="position-relative" href="{{ $author['link']['href'] }}">
        {{ $author['link']['text'] }}
      </a>
    </h6>

    <time class="post-meta-publishedDate" datetime="{{ date('Y-m-d H:i:s', strtotime($publishedDate)) }}">
      {{ $publishedDate }}
    </time>
  </div>
</div>
