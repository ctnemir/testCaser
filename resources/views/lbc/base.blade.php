<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Markus Zundel">
  <meta name="description" content="{{ $data['meta']['description'] ?? 'Laravel Bootstrap Components is a starter kit for Laravel with Bootstrap + Blade designed specifically for developers' }}">
  <title>{{ isset($data['meta']['title']) ? $data['meta']['title'] . ' | ' : '' }}
    Laravel Bootstrap Components</title>
  {{--  <link href="{{ url('lbc-docs.min.css') }}" rel="stylesheet" type="text/css">--}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

  <link rel="canonical" href="{{ url()->current() }}">

  <style type="text/css">
    code[class*="language-"],
    pre[class*="language-"] {
      color: black;
      background: none;
      text-shadow: 0 1px white;
      font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
      font-size: 1em;
      text-align: left;
      white-space: pre;
      word-spacing: normal;
      word-break: normal;
      word-wrap: normal;
      line-height: 1.5;

      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;

      -webkit-hyphens: none;
      -moz-hyphens: none;
      -ms-hyphens: none;
      hyphens: none;
    }

    pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
    code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
      text-shadow: none;
      background: #b3d4fc;
    }

    pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
    code[class*="language-"]::selection, code[class*="language-"] ::selection {
      text-shadow: none;
      background: #b3d4fc;
    }

    @media print {
      code[class*="language-"],
      pre[class*="language-"] {
        text-shadow: none;
      }
    }

    /* Code blocks */
    pre[class*="language-"] {
      padding: 1em;
      margin: .5em 0;
      overflow: auto;
    }

    :not(pre) > code[class*="language-"],
    pre[class*="language-"] {
      background: #f5f2f0;
    }

    /* Inline code */
    :not(pre) > code[class*="language-"] {
      padding: .1em;
      border-radius: .3em;
      white-space: normal;
    }

    .token.comment,
    .token.prolog,
    .token.doctype,
    .token.cdata {
      color: slategray;
    }

    .token.punctuation {
      color: #999;
    }

    .namespace {
      opacity: .7;
    }

    .token.property,
    .token.tag,
    .token.boolean,
    .token.number,
    .token.constant,
    .token.symbol,
    .token.deleted {
      color: #905;
    }

    .token.selector,
    .token.attr-name,
    .token.string,
    .token.char,
    .token.builtin,
    .token.inserted {
      color: #690;
    }

    .token.operator,
    .token.entity,
    .token.url,
    .language-css .token.string,
    .style .token.string {
      color: #9a6e3a;
      background: hsla(0, 0%, 100%, .5);
    }

    .token.atrule,
    .token.attr-value,
    .token.keyword {
      color: #07a;
    }

    .token.function,
    .token.class-name {
      color: #DD4A68;
    }

    .token.regex,
    .token.important,
    .token.variable {
      color: #e90;
    }

    .token.important,
    .token.bold {
      font-weight: bold;
    }

    .token.italic {
      font-style: italic;
    }

    .token.entity {
      cursor: help;
    }
  </style>

  @if(request()->getHost() === 'laravel-bootstrap-components.com')
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146285562-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());

      gtag('config', 'UA-146285562-1');
    </script>
  @endif

  @stack('head')
</head>
<body>

<div class="container">
  <x-stripe-nav class="mb-2" :links="[
    [
      'class' => 'text-stripe-100 font-size-lg font-weight-bolder',
      'title' => 'LBC',
      'href' => '/lbc',
    ],
    [
      'title' => 'Components',
      'slot' => 'slot1',
    ],
    [
      'title' => 'Examples',
      'slot' => 'slot2',
    ],
    [
      'title' => 'Themes',
      'slot' => 'slot3',
    ],
    [
      'title' => 'Download',
      'href' => 'https://laravel-bootstrap-components.com/downloads',
    ],
    [
      'class' => 'ml-md-auto',
      'title' => 'Contact',
      'href' => 'https://laravel-bootstrap-components.com/contact',
    ],
  ]">
    <x-slot name="slot1">
      <div class="px-5 py-4"{!! $agent->isMobile() ? '' : ' style="width:420px"' !!}>
        <h6 class="text-primary font-weight-bold text-uppercase mt-2" style="margin-left:-8px">

          <x-svg class="bi bi-gear-fill text-info" :width="[20]" :height="[20]" style="top:1px">
            <path fill-rule="evenodd" d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" clip-rule="evenodd"/>
          </x-svg>

          Components
        </h6>

        <div class="row">
          @foreach(array_chunk($navbar[0]['childs'], 2) as $chunk)
            <div class="col-6">
              <ul class="nav flex-column">
                @foreach($chunk as $item)
                  <li class="nav-item">
                    <x-link
                      :all="$item['link']"
                      :class="'nav-link text-color-hover rounded ' . (Request::url() == $item['link']['href'] ? 'bg-gray-200 font-weight-bold' : 'bg-white-hover')"
                    />
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>

      <div class="alert-info px-5 py-3 text-primary" style="margin-left:-8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px">
        <x-svg class="bi bi-gear-fill text-info" style="margin-right:3px;">
          <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z" clip-rule="evenodd"/>
        </x-svg>
        More components in progress.
      </div>
    </x-slot>

    <x-slot name="slot2">
      <div class="px-5 py-4"{!! $agent->isMobile() ? '' : ' style="width:480px"' !!}>
        <h6 class="text-primary font-weight-bold mt-2" style="margin-left:-8px">

          <x-svg class="bi bi-gear-fill text-info" :width="[20]" :height="[20]" style="top:1px">
            <path fill-rule="evenodd" d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" clip-rule="evenodd"/>
          </x-svg>

          EXAMPLES<br>
          <small class="text-muted" style="padding-left:24px;display:inline-block">Example templates from Bootstrap Dokumention.</small>
        </h6>

        <div class="row">
          @foreach(array_chunk($navbar[1]['childs'], 2) as $chunk)
            <div class="col-6">
              <ul class="nav flex-column">
                @foreach($chunk as $item)
                  <li class="nav-item">
                    <x-link
                      :all="$item['link']"
                      :class="'nav-link text-color-hover rounded ' . (Request::url() == $item['link']['href'] ? 'bg-gray-200 font-weight-bold' : 'bg-white-hover')"
                    />
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </x-slot>

    <x-slot name="slot3">
      <div class="px-5 py-4"{!! $agent->isMobile() ? '' : ' style="width:300px"' !!}>
        <h6 class="text-primary font-weight-bold text-uppercase mt-2" style="margin-left:-8px">

          <x-svg class="bi bi-gear-fill text-info" :width="[20]" :height="[20]" style="top:1px">
            <path fill-rule="evenodd" d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" clip-rule="evenodd"/>
          </x-svg>

          Themes
        </h6>

        <div class="row">
          @foreach(array_chunk($navbar[2]['childs'], 2) as $chunk)
            <div class="col-6">
              <ul class="nav flex-column">
                @foreach($chunk as $item)
                  <li class="nav-item">
                    <x-link
                      :all="$item['link']"
                      :class="'nav-link text-color-hover rounded ' . (Request::url() == $item['link']['href'] ? 'bg-gray-200 font-weight-bold' : 'bg-white-hover')"
                    />
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>

      <div class="alert-info px-5 py-3 text-primary" style="margin-left:-8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px">
        <x-svg class="bi bi-gear-fill text-info" style="margin-right:3px;">
          <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z" clip-rule="evenodd"/>
        </x-svg>
        More themes in progress.
      </div>
    </x-slot>
  </x-stripe-nav>
</div>

@yield('page-content')

<footer class="bg-lighter text-muted mt-5 small">
  <div class="container p-3 p-md-5">
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="https://twitter.com/ZundelWebdesign" class="text-body" target="_blank">Twitter</a>
      </li>

      <li class="list-inline-item">
        <a href="https://www.facebook.com/ZundelWebdesignDE/" class="text-body" target="_blank">Facebook</a>
      </li>

      <li class="list-inline-item">
        <a href="https://www.zundel-webdesign.de" class="text-body" target="_blank">Zundel-Webdesign</a>
      </li>

      <li class="list-inline-item">
        <a href="https://www.zundel-webdesign.de/datenschutz" class="text-body" target="_blank">Privacy policy</a>
      </li>

      <li class="list-inline-item">
        <a href="https://creativecommons.org/licenses/by/3.0/" class="text-body" target="_blank">Creative Commons Licence</a>
      </li>
    </ul>

    <p>
      Designed and built by &copy; {{ date('Y') }} Zundel-Webdesign
    </p>
  </div>
</footer>

<script src="{{ url('js/app.js') }}" defer></script>
<script>
  const codeExamples = document.querySelectorAll('.code-example')

  codeExamples.forEach(function (codeExample) {
    let collapseState = codeExample.querySelector('[data-toggle="collapse"]')
    let dataTabContent = codeExample.querySelector('.tab-pane.data')
    let dataTab = codeExample.querySelector('.nav-item.data')

    if (!dataTabContent) {
      dataTab.style.display = 'none'
    }

    collapseState.addEventListener('click', () => {
      if (collapseState.innerText === 'Show code') {
        collapseState.innerText = 'Hide code'
      } else if (collapseState.innerText === 'Hide code') {
        collapseState.innerText = 'Show code'
      }
    }, false)
  })
</script>
@stack('js')
</body>
</html>
