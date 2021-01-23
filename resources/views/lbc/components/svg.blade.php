<svg {!! $attributes->merge($attrs) !!} fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  @if(!empty($path))
    <path fill-rule="evenodd" d="{{ $path }}" clip-rule="evenodd"/>
  @else
    {!! $slot !!}
  @endif
</svg>

