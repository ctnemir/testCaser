<nav class="navigation navbar navbar-expand-lg navbar-light fixed-top bg-white" role="navigation">
  <div class="container-fluid">
    <a class="navigation-logo navbar-brand font-weight-bold mr-2" href="{{ route('liara') }}">
      <x-svg
        class="bi bi-code"
        :width="[36]"
        :height="[36]"
        path="M5.854 4.146a.5.5 0 010 .708L2.707 8l3.147 3.146a.5.5 0 01-.708.708l-3.5-3.5a.5.5 0 010-.708l3.5-3.5a.5.5 0 01.708 0zm4.292 0a.5.5 0 000 .708L13.293 8l-3.147 3.146a.5.5 0 00.708.708l3.5-3.5a.5.5 0 000-.708l-3.5-3.5a.5.5 0 00-.708 0z"
      />
      Liara
    </a>

    <div class="hamburger d-block d-lg-none" data-trigger="navigation-collapse">
      <span class="hamburger-top-bun"></span>
      <span class="hamburger-bottom-bun"></span>
    </div>

    <div class="navbar-collapse" data-target="navigation-collapse">
      @include('lbc.themes.liara.parts.navigation.menu')

      @include('lbc.themes.liara.parts.navigation.search')

      @include('lbc.themes.liara.parts.navigation.social')
    </div>
  </div>
</nav>
