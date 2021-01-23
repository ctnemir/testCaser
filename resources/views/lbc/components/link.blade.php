<a {!! $attributes->merge($attrs) !!}>
  @if($trim)
    {!! \mb_strimwidth($text, 0, $trim + 3, '...') !!}
  @else
    {!! $text !!}
  @endif
</a>
