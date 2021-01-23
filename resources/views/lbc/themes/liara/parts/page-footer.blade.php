<div class="container">
  <div class="row">
    <div class="col-6 col-md-3">
      <h5 class="mb-2">Abundanlia</h5>

      @php
        $abundanlia = [
          [
            'href' => '#',
            'text' => 'Instantias'
          ], [
            'href' => '#',
            'text' => 'Nobis'
          ], [
            'href' => '#',
            'text' => 'Publiciter'
          ], [
            'href' => '#',
            'text' => 'Pineam'
          ]
        ]
      @endphp

      <ul class="list-unstyled mb-3 mb-lg-0">
        @foreach($abundanlia as $item)
          <li class="mb-2">
            <x-link :all="$item"/>
          </li>
        @endforeach
      </ul>
    </div>

    <div class="col-6 col-md-3">
      @php
        $resources = [
          [
            'href' => url('lbc'),
            'text' => 'Documentation'
          ], [
            'href' => route('liara.imprint'),
            'text' => 'Imprint'
          ], [
            'href' => '#',
            'text' => 'Privacy policy'
          ], [
            'href' => '#',
            'text' => 'Sitemap'
          ]
        ]
      @endphp

      <h5 class="mb-2">Resources</h5>

      <ul class="list-unstyled mb-3 mb-lg-0">
        @foreach($resources as $item)
          <li class="mb-2">
            <x-link :all="$item"/>
          </li>
        @endforeach
      </ul>
    </div>

    <div class="col-md-6">
      <h5>Newsletter</h5>

      <p>Dui virlutis fusce sed Semper clenodia, attendere quo nisi arctiora carbone alexander nisi minus.</p>

      <div class="input-group">
        <input type="text" class="form-control" placeholder="E-Mail-Address">

        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <x-svg
              class="bi text-white"
              path="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"
            />
          </button>
        </div>
      </div>
    </div>
  </div>

  <p class="small mt-3 mt-lg-4">&copy; {{ date('Y') }} Zundel-Webdesign - All rights reserved.</p>
</div>

