<{{ $tag }} {!! $attributes->merge($attrs) !!}>
@isset($all['link'])
  <x-link :all="$all['link']"/>
@else
  @if($trim)
    {!! \mb_strimwidth($text, 0, $trim + 3, '...') !!}
  @else
    {!! $text !!}
  @endif

  {!! $slot ?? '' !!}
@endisset
</{{ $tag }}>
