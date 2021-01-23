<nav>
  <div class="nav nav-tabs {{ $navTabsClass ?? '' }}" id="{{ $tabsId }}" role="tablist">
    @foreach ($items as $item)
      <a class="nav-item nav-link {{ $loop->first ? 'active' : '' }}"
         id="nav-{{ Str::slug($item) }}-tab"
         data-toggle="tab"
         href="#nav-{{ Str::slug($item) }}"
         role="tab"
         aria-controls="nav-{{ $item }}"
          {!! $loop->first ? 'aria-selected="true"' : '' !!}>
        {{ $item }}
      </a>
    @endforeach
  </div>
</nav>
