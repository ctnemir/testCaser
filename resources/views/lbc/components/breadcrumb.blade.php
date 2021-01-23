<nav aria-label="breadcrumb">
  <ol {!! $attributes->merge($attrs) !!}>
    @if(!empty($pages))
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Home</a>
      </li>

      @foreach ($pages as $page )
        <li class="breadcrumb-item">
          <x-link :all="$page['link']"/>
        </li>
      @endforeach

      <li class="breadcrumb-item active" aria-current="page">
        {{ $currentPage }}
      </li>
    @elseif(!empty($currentPage))
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Home</a>
      </li>

      <li class="breadcrumb-item active" aria-current="page">
        {{ $currentPage }}
      </li>
    @else
      <li class="breadcrumb-item active" aria-current="page">
        Home
      </li>
    @endif
  </ol>
</nav>
