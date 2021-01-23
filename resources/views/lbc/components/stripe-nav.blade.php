<div {!! $attributes->merge($attrs) !!} data-role="stripe-nav" data-device="{{ $agent->isMobile() || $agent->isTablet() ? 'mobile' : 'desktop' }}">
  <ul class="stripe-nav-root">
    <li class="stripe-nav-section">
      @foreach($links as $link)
        <a class="stripe-nav-root-link{{ !empty($link['href']) ? '' : ' stripe-nav-has-dropdown' }} {{ $link['class'] ?? '' }}" href="{{ $link['href'] ?? '#' }}" data-stripe-dropdown="{{ $link['slot'] ?? '' }}">{!! $link['title'] !!}</a>
      @endforeach
    </li>
  </ul>

  <div class="stripe-nav-dropdown-root">
    <div class="stripe-nav-dropdown-background">
      <div class="stripe-nav-dropdown-background-alt"></div>
    </div>
    <div class="stripe-nav-arraw"></div>

    <div class="stripe-nav-dropdown-container">
      @php $i = 1 @endphp
      @while(isset(${'slot' . $i}))
        <div class="stripe-nav-dropdown-section" data-stripe-dropdown="slot{{ $i }}">
          <div class="stripe-nav-dropdown-content left">
            {!! ${'slot' . $i} !!}
          </div>
        </div>
        @php $i++ @endphp
      @endwhile
    </div>
  </div>
</div>
