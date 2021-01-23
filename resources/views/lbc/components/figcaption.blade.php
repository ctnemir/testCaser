@if(isset($title))
  <figcaption class="{{ $figcaptionClass ?? '' }}">
    @if(isset($link['url']))
      <a class="{{ $linkClass ?? 'text-color' }}" href="{{ $link['url'] }}">
        (&copy;) {{ $title }}
      </a>
    @else
      (&copy;) {{ $title }}
    @endif
  </figcaption>
@endif
