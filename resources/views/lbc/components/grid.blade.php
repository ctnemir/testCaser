@if(!isset($containerHide))
  <div class="{{ $containerClass ?? 'container' }}">
@endisset

    {!! $top ?? '' !!}

    @if(isset($colLeft) || isset($colRight))
      <div class="row {{ $rowClass ?? '' }}">
        @isset($colLeft)
          <div class="{{ $colLeft }}">
            {!! $left ?? '' !!}
          </div>
        @endisset

        @isset($colCenter)
          <div class="{{ $colCenter }}">
            {!! $center ?? '' !!}
          </div>
        @endisset

        @isset($colRight)
          <div class="{{ $colRight }}">
            {!! $right ?? '' !!}
          </div>
        @endisset
      </div>
    @else
        {!! $center ?? '' !!}
    @endif

@if(!isset($containerHide))
  </div>
@endisset
