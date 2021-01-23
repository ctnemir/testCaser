<div {!! $attributes->merge($attrs) !!}>
  @if(!isset($_header['hide']) && (!empty($_header) || isset($header)))
    <div class="card-header {{ $_header['class'] ?? '' }}" {!! $_header['id'] ?? '' !!}>
      @if(!empty($_header['headline']))
        <x-headline :all="$_header['headline']"/>
      @endif

      {!! $_header['text'] ?? '' !!}
      {!! $header ?? '' !!}
    </div>
  @endif

  @if(!empty($_image) && !isset($_image['hide']))
    <x-image :all="$_image" :class="'card-image ' . ($_image['class'] ?? 'card-img-top')"/>
  @endif

  @isset($image)
    {!! $image !!}
  @endisset

  @isset($collapse['id'])
    <div id="collapse-{{ $collapse['id'] }}" {!! $collapse['attrs'] !!}>
  @endisset

  @if(!isset($_body['hide']))
    <div class="{{ $_body['class'] }}">
      @if(!empty($_body['headline']))
        <x-headline :all="$_body['headline']"/>
      @endif

      @if (!isset($_body['hideText']))
        {!! $_body['text'] ?? '' !!}
        {!! $body ?? '' !!}
      @endif
    </div>
  @endif

  @isset($collapse['id'])
    </div>
  @endisset

  @if(!isset($_footer['hide']) && (!empty($_footer['text']) || isset($footer)))
    <div class="{{ $_footer['class'] ?? 'card-footer' }}">
      {!! $_footer['text'] ?? '' !!}
      {!! $footer ?? '' !!}
    </div>
  @endif
</div>

