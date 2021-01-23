<div {!! $attributes->merge($attrs) !!}{!! $attrs2 !!}>
  @if(isset($image['src']))
    <x-image :all="$image"/>
  @elseif(isset($icon))
    @icon($icon . $mediaObjectClass ?? '')
  @endif

  {!! $object ?? '' !!}

  <div{!! $body['attrs'] !!}>
    @if(!empty($headline))
      <x-headline :all="$headline"/>
    @endif

    {!! $text ?? '' !!}
    {!! $slot ?? '' !!}
  </div>
</div>
