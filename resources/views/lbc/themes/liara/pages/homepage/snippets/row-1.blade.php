<div class="row row-1 mb-3 mb-lg-5 overflow-hidden">
  <div class="col-lg-7">
    <x-image
      class="row-1-image img-fluid rounded-lg mb-3 mb-lg-0 animated fadeIn faster"
      src="liara/images/homepage/guy.jpg"
      :width="[635]"
      :height="[800]"
      fit="crop-center"
    />
  </div>

  <div class="col-lg-5 d-flex flex-column justify-content-center">
    <span>Vestibulum</span>

    <h3>Sed aliquam ultrices mauris</h3>

    <p>
      Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.
      Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
      leo.
    </p>

    <p class="mb-3">
      <a class="btn btn-outline-secondary" href="#">Learn more</a>
    </p>

    <p class="mb-3">
      Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec
      posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante
      ipsum primis in faucibus orci luctus et ultrices posuere cubilia
    </p>

    <h5 class="mb-0">Donec sodales sagittis</h5>

    @php
      $listInlineItems = [
        [
          'image' => [
            'src' => 'liara/images/homepage/italy.jpg',
          ],
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Aenean vulputate eleifend',
                'href' => '#',
              ]
            ]
          ]
        ],[
          'image' => [
            'src' => 'liara/images/homepage/wood.jpg',
          ],
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Sed consequat, leo',
                'href' => '#',
              ]
            ]
          ]
        ],[
          'image' => [
            'src' => 'liara/images/homepage/petals.jpg',
          ],
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Etiam sit amet',
                'href' => '#',
              ]
            ]
          ]
        ],[
          'image' => [
            'src' => 'liara/images/homepage/italy.jpg',
          ],
          'body' => [
            'headline' => [
              'link' => [
                'text' => 'Lorem ipsum dolor',
                'href' => '#',
              ]
            ]
          ]
        ]
      ]
    @endphp

    <div class="table-responsive-xl pb-3 pt-2 pt-lg-3">
      <ul class="list-inline d-flex justify-content-between mb-0">
        @foreach($listInlineItems as $item)
          <li class="list-inline-item pr-1 position-relative">
            <x-card
              :all="$item"
              :overlay="true"
              class="shadow"
              :image="[
                'class' => 'rounded',
                'width' => [135],
                'height' => [160],
              ]"
              :body="[
                'class' => 'p-2',
                'headline' => [
                  'link' => ['class' => 'card-title stretched-link' . ($loop->index != 2 ? ' text-white' : ' text-color')],
                  'class' => 'font-size-base mt-auto mb-0 font-weight-normal'
                ]
              ]"
            />
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
