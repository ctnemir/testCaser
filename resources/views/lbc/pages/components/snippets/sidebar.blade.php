<ul class="nav flex-column sticky-top">
  @foreach ($navbar[0]['childs'] as $item)
    @php
      $currentUrl = Request::url();
    @endphp
    <li class="nav-item">
      <x-link
        :all="$item['link']"
        :class="'nav-link text-color-hover rounded' . ($currentUrl == $item['link']['href'] ? ' bg-gray-200 font-weight-bold' : ' bg-white-hover')"
      />
    </li>
  @endforeach
</ul>
