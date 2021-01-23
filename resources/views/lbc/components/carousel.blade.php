@php
$i = 1;
$slots = [];
while(isset(${'slot_' . $i})) {
    $slots[]['content'] = ${'slot_' . $i};
    $i++;
}
$items = array_merge($items, $slots)
@endphp

<div {!! $attributes->merge($attrs) !!} data-ride="carousel">
  @if($indicators == true && count($items) > 1)
    <ol class="carousel-indicators">
      @for($i = 0; $i < count($items); $i++)
        <li data-target="#{{ $attrs['id'] }}" data-slide-to="{{ $i }}"{!! $i == 0 ?  ' class="active"' : '' !!}></li>
      @endfor
    </ol>
  @endif

  <div class="carousel-inner">
    @foreach($items as $item)
      <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
        @isset($item['image']['src'])
          <x-image
            :all="$item['image']['all'] ?? []"
            :class="$item['image']['class'] ?? 'd-block w-100'"
            :src="$item['image']['src']"
            :lazyload="$item['image']['lazyload']"
            :alt="$item['image']['alt'] ?? ''"
          />
        @endisset
        @isset($item['content'])
          {!! $item['content'] !!}
        @endisset
      </div>
    @endforeach
  </div>

  @if($control == true && count($items) > 1)
    <a class="carousel-control-prev" href="#{{ $attrs['id'] }}" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{ $attrs['id'] }}" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  @endif
</div>
