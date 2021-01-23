@php
  $domain = request()->getHost() === 'laravel-bootstrap-components.com' ? '' : 'lbc';
  $menu = [
    [
      'link' => [
        'title' => 'Features',
        'url' => route('liara.features'),
      ]
    ], [
      'link' => [
        'title' => 'Blog',
        'url' => route('liara.blog'),
      ]
    ], [
      'link' => [
        'title' => 'About',
        'url' => route('liara.about'),
      ]
    ], [
      'link' => [
        'title' => 'Contact',
        'url' => route('liara.contact'),
      ]
    ], [
      'link' => [
        'title' => 'Docs',
        'url' => url($domain),
      ]
    ]
  ]
@endphp

<ul class="navbar-nav mr-auto">
  @foreach($menu as $item)
    <li class="{{ $loop->last ? 'align-self-center d-flex ' : '' }}nav-item{{ url()->full() === $item['link']['url'] ? ' active' : '' }}">
        <a class="{{ $loop->last ? 'btn btn-primary' : 'nav-link' }} text-uppercase" href="{{ $item['link']['url'] }}">
          {{ $item['link']['title'] }}
        </a>
    </li>
  @endforeach
</ul>
