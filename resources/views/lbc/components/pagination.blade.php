<nav>
  <ul {!! $attributes->merge($attrs) !!}>
    <li class="page-item {{ $current == 1 ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $prev['href'] ?? '' }}">{!! $prev['text'] ?? 'Previous' !!}</a>
    </li>
    @for($page = 1; $page <= $pages; $page++ )
      <li {!! $current == $page ? 'class="page-item active"  aria-current="page"' : 'class="page-item"' !!}>
        <a class="page-link" href="{{ url()->current() . '?page=' . $page  }}">{{ $page }}</a>
      </li>
    @endfor
    <li class="page-item {{ $current == $pages ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $next['href'] ?? '' }}">{!! $next['text'] ?? 'Next' !!}</a>
    </li>
  </ul>
</nav>
